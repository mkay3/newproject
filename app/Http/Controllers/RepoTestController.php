<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\Post;
use App\User;
use App\Comment;
use App\Category;
use Redirect;
use Illuminate\Http\Request;
use App\Http\Requests\TestRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Repositories\Blog\BlogInterface;

class RepoTestController extends Controller
{	
	protected $interface;
    public function __construct(BlogInterface $bloginterface){
    	$this->interface = $bloginterface; 
        //$this->middleware('auth')->except('visitor','viewPost','storeComment');
    }

    public function visitor(){
       $posts = Post::paginate(5);
       $categories = Category::get();
       $popularPosts = Post::paginate(5);
       return view('repo.visitor',compact('posts','categories','popularPosts'));
    }

    public function index($catid = null){
        if($catid){
            $data = $this->interface->index($catid);
        }
        else{
        	$data = $this->interface->index();
        }
        $posts = $data['posts'];
        $popularPosts = $data['popularPosts'];
        $categories = $data['categories'];
        if($posts->count()){
            return view('repo/dashboard',compact('posts','popularPosts','categories','catid'));
        }
        else{
            return view('repo/dashboard',compact('categories','popularPosts','catid'));
        }
    }

    public function createPost(){
        $categories = $this->interface->create_post();
        return view('repo/post')->with(['categories'=>$categories]);
    }

    public function storePost(Request $request){
    	
    	//validation
    	$this->validate($request,[
    		'title' => 'required',
    		'description' => 'required',
    		'category_id' => 'required',
    		'image_name' => 'required'
    	]);

    	$Post = $this->interface->store_post($request);
        if($Post){
            Session::flash('status', 'Post successfully added.');
            return redirect('dashboard');
        }

    }

    public function createCategory(){
        return view('repo/category');
    }

    public function storeCategory(Request $request){
 		
    	//validation
 		$this->validate($request,[
 			'catname' => 'required'
 		]);

 		$category = $this->interface->store_category($request->all());
        if($category){
            Session::flash('status','Category has been created');
            return redirect('repo/dashboard');
        }
    }
   
    public function managePost(){
    	$posts = $this->interface->manage_post();
        return view('repo.managepost')->withPosts($posts);
    }

    public function editPost($id){
    	$data = $this->interface->edit_post($id);
        $post = $data['post'];
        $categories = $data['categories'];
        return view('repo/editpost',compact('post','categories'));
    }

    public function updatePost(Request $request, $id){
        
        //validation
        $rules = array(
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required|numeric'
        );
        $this->validate($request,$rules);
        //$post->image_name = $request->image_name;
        $update = $this->interface->update_post($id,$request);
       	if($update){
       		Session::flash('status', 'Post successfully updated');  
       	}  
       	else{
       		Session::flash('status', 'there is some error'); 
       	}  
       	return redirect('post/manage');  
        //$request->session()->flash('status', 'Task was successful!'); #1
       
    }

    public function deletePost($id){
        $deleted = $this->interface->delete_post($id);
        if($deleted){
        	$data = array('msg'=>'success');
            return response()->json($data);
        }
    }

    public function deleteSelected(Request $request){
        $deleted = $this->interface->delete_selected($request->post_ids);
        if($deleted){
        	Session::flash('status','Selected posts have been successfully deleted');
        	return redirect()->back();
    	}
    }

    public function deleteAllPost(){
        $deleted = $this->interface->delete_all_posts();
        if($deleted){
        	Session::flash('status','All posts have been deleted successfully');
        	return redirect()->back();
        }
    }

    public function deleteAllCategory(){
        $deleted = $this->interface->delete_all_categories();
        if($deleted){
        	Session::flash('status','All categories have been deleted successfully');
        	return redirect()->back();
        }
        
    }


    public function restorePost(){
        $restore = $this->interface->restore_posts();
        if($restore){
        	return "done";
        }
    }

    public function manageCategory(){
        $categories = $this->interface->manage_category();  
        return view('repo.managecategory',compact('categories'));
    }

    public function deleteCategory(Request $request){
    	$deleted_enitity = $this->interface->delete_category($request);
        if($deleted_enitity == "catid"){
        	$data = array("msg"=>"success");
            return response()->json($data);
        }
        else if($deleted_enitity == "catids"){
        	Session::flash('status','Selected categories have been deleted successfully');
            return redirect()->back();
        }
        else{
        	dd("some error");
        }
        
    }

    public function editCategory($id){
        $category = $this->interface->edit_category($id);
        return view('repo/editcategory',compact('category'));
    }

    public function updateCategory(Request $request, $id){
    	//validation
    	$this->validate($request,array('cat_name'=> 'required'));
    	
    	$update = $this->interface->update_category($request,$id);
        if($update){
        	Session::flash('status','Category has been updated');
            return redirect('repo/category/manage');
        }
        
    }

    public function restoreCategory(){
    	$restore = $this->interface->restore_category();
    	if($restore){
    		return "done";
    	}
    }

    public function viewPost($id){
    	$post = $this->interface->view_post($id);
        return view('repo.viewpost',compact('post'));
    }

    public function storeComment(Request $request){
    	if(Auth::id()){
            $this->validate($request,['comment'=>'required']);
        	$post = $this->interface->store_comment($request);
        	if($post){
        		Session::flash('status','comment has been saved');
            	return redirect()->back();
        	}
        }
        else{
        	return redirect('register');
        }
    }

}
