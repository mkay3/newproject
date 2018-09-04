<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\Post;
use App\User;
use Redirect;
use App\Comment;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\TestRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
//use Validator;

class DashboardController extends Controller
{
    public function __construct(){ 
        $this->middleware('auth')->except('visitor','viewPost','storeComment');
    }

    public function visitor(){
       $posts = Post::paginate(5);
       $categories = Category::get();
       $popularPosts = Post::paginate(5);
       return view('blog.visitor',compact('posts','categories','popularPosts'));
        //dd($posts);
    }

    public function index($catid = null){
        if($catid){
            //$posts = Post::where(array('category_id'=>$catid,'user_id'=>Auth::id()))->paginate(5);
            $posts = Auth::user()->categories()->find($catid)->posts()->paginate(5);
            //$posts = Auth::user()->posts()->where(array('category_id'=>$catid))->paginate(5);
            //dd($posts);
            $popularPosts = Post::where(array('category_id'=>$catid,'user_id'=>Auth::id()))->take(5)->get();
        }
        else{
            $posts = Auth::user()->posts()->paginate(5);
            $popularPosts = Auth::user()->posts()->take(5)->get();
        }
        
        $categories = User::find(Auth::id())->categories;
        if($posts->count()){
            return view('blog/dashboard',compact('posts','popularPosts','categories','catid'));
        }
        else{
            return view('blog/dashboard',compact('categories','popularPosts','catid'));
        }
    }

    public function createPost(){
        $categories = User::find(Auth::id())->categories;
        return view('blog/post')->with(['categories'=>$categories]);
    }

    public function storePost(Request $request){
        $file = $request->file('image_name');
        $Post = Post::create([
            'title'=>$request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'image_name' => $file->getClientOriginalName(),
            'user_id' => Auth::id(),
        ]);

        if($Post->id){
            $destinationPath = public_path()."\uploads";
            $file->move($destinationPath,$file->getClientOriginalName());
            Session::flash('status', 'Post successfully added.');
            return redirect('dashboard');
        }

    }

    public function createCategory(){
        return view('blog/category');
    }

    public function storeCategory(Request $request){

        $category = Category::create([
            'cat_name'=>$request->catname,
            'user_id'=> Auth::id()
        ]);
        if($category->id){
            Session::flash('status','Category has been created');
            return redirect('dashboard');
        }
    }
   
    public function managePost(){

        $posts = Auth::user()->posts; //User::find(Auth::id())->posts;
        return view('blog.managepost')->withPosts($posts);
    }

    public function editPost($id){
        $post = Post::findOrFail($id);
        $categories = Category::pluck('cat_name','id'); //select(['id','cat_name'])->get();
        //$categories = DB::table('categories')->get();
        return view('blog/editpost',compact('post','categories'));
    }

    public function updatePost(Request $request, $id){
        //create validation rules
        $rules = array(
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required|numeric'
        );

        //$post->image_name = $request->image_name;
        if($this->validate($request,$rules)){ //new method
            $post = Post::find($id);
            $post->title = $request->title;
            $post->description = $request->description;
            $post->category_id = $request->category_id;
            $post->save();
            //$request->session()->flash('status', 'Task was successful!'); #1
            Session::flash('status', 'Post successfully updated');  //#2
            return redirect('post/manage');  
        }
        
    }

    public function deletePost($id,Request $request){
        
        $post = Post::findOrFail($id);
        if($post->id){
            $post->delete();
            if($request->msg == "ajaxData"){
                $data = array('msg'=>'success');
                return response()->json($data);
            }
            else{
                Session::flash('status','Post successfully deleted');
                return redirect()->back();
            }
        }
        
    }

    public function deleteSelected(Request $request){
        //dd($request->post_ids);
        $post = Post::whereIn('id',$request->post_ids)->delete();
        Session::flash('status','Selected posts have been successfully deleted');
        return redirect()->back();
    }

    public function deleteAllPost(){
        //dd("test");
        Post::query()->delete();
        Session::flash('status','All posts have been deleted successfully');
        return redirect()->back();
    }

    public function deleteAllCategory(){
        //dd("test");
        Category::query()->delete();
        Session::flash('status','All categories have been deleted successfully');
        return redirect()->back();
    }


    public function restorePost(){
        if(Post::query()->restore()){
            echo "Done";
        }
    }

    public function manageCategory(){
        //$categories = User::find(Auth::id())->categories;
        $categories = Auth::user()->categories;
        return view('blog.managecategory',compact('categories'));
    }

    public function deleteCategory(Request $request){
    
        if(isset($request->cat_id)){
            $category = Category::findOrFail($request->cat_id);
            if($category->id){
                $category->delete();
                $data = array("msg"=>"success");
                return response()->json($data);
            }
        }
       
        if(is_array($request->cat_ids)){
            Category::whereIn('id',$request->cat_ids)->delete();
            Session::flash('status','Selected categories have been deleted successfully');
            return redirect()->back();

        }
        
    }

    public function editCategory($id){
        $category = Category::findOrFail($id);
        return view('blog/editcategory',compact('category'));
    }

    public function updateCategory(Request $request, $id){
        if($this->validate($request,array('cat_name'=> 'required'))){
            $category = Category::find($id);
            $category->cat_name = $request->cat_name;
            $category->save();
            Session::flash('status','Category has been updated');
            return redirect('category/manage');
        }
        
    }

    public function restoreCategory(){
        if(Category::query()->restore()){
            echo "done!";
        }
    }

    public function viewPost($id){
        $post = Post::find($id);
        return view('blog.viewpost',compact('post'));
    }

    public function storeComment(Request $request){
        
        if(Auth::id()){
            $this->validate($request,['comment'=>'required']);
            $comment = Comment::create([
                'description'=>$request->comment,
                'post_id' => $request->post_id,
                'user_id' => Auth::id()
                ]);

            if($comment->id){
                Session::flash('status','comment has been saved');
                return redirect()->back();
            }
        }
        else{
            return redirect('register');
        }
    }

    public function test1(){
        return view('test1');
    }

    public function test2(){
        return view('test2');
    }

    public function fixed_deposit(){
        return view('fixed_deposit');
    }

    public function gold(){
        return view('gold');
    }

    public function old(){
        return view('old_machinery');
    }

    public function other(){
        return view('other_machinery');
    }

    public function security(){
        return view('security_deposit');
    }

    public function vehicle(){
        return view('vehicle');
    }

    public function showform(){
        return view('formtesting');
    }

    public function storeForm(TestRequest $request){
        
        //validation old method        
        /*$v = Validator::make($request->all(),['type'=>'required|numeric']);
        if($v->passes()){
           echo "pass"; 
        }*/
    
        //validation new method
        //$this->validate($request,['type'=>'required']);
        echo "validation passed";
    }
}
