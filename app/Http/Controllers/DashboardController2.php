<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\Category;
use Auth;
use App\User;
use Session;
use Redirect;
use Illuminate\Pagination\Paginator;

class DashboardController extends Controller
{
    public function __construct(){ 
        $this->middleware('auth');
    }

    public function index(){
    	$posts = User::find(Auth::id())->posts->simplePaginate(2);
    	//$posts = $posts;
    	dd($posts);
    	if($posts){
    		return view('blog/dashboard',compact('posts',$posts));
    	}
    	else{
    		return view('blog/dashboard');
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
      		Session::flash('status', 'Post successfully added!');
    		return redirect()->back();
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
    	$posts = User::find(Auth::id())->posts;
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
    	if($this->validate($request,$rules)){
    		$post = Post::find($id);
    		$post->title = $request->title;
    		$post->description = $request->description;
    		$post->category_id = $request->category_id;
    		$post->save();
    		//$request->session()->flash('status', 'Task was successful!'); #1
    		Session::flash('status', 'Post successfully updated');  //#2
    		return redirect()->back();	
    	}
    	
    }

    public function deletePost($id){
    	dd("Fsfs");
    	$post = Post::findOrFail($id);
    	dd($post);
    	$post->delete();
    	Session::flash('status','Post successfully deleted');
    	return redirect()->back();
    }

}
