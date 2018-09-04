<?php

namespace App\Repositories\Blog;
use Auth;
use App\Post;
use App\User;
use App\Comment;
use App\Category;
use Illuminate\Http\Request;


class BlogRepository implements BlogInterface{

	public function __construct(){

	}

	public function index($catid = null){
		if($catid){
			$posts = Auth::user()->categories()->find($catid)->posts()->paginate(5);
			$popularPosts = Post::where(array('category_id'=>$catid,'user_id'=>Auth::id()))->take(5)->get();
		}
		else{
			$posts = Auth::user()->posts()->paginate(5);
			$popularPosts = Auth::user()->posts()->take(5)->get();
		}
		$categories = User::find(Auth::id())->categories;
		return ['posts'=>$posts,'popularPosts'=>$popularPosts,'categories'=>$categories];
	}

	public function create_post(){
		return User::find(Auth::id())->categories;
	}

	public function store_post($attributes){
		$file = $attributes->file('image_name');
        $Post = Post::create([
            'title'=>$attributes->title,
            'description' => $attributes->description,
            'category_id' => $attributes->category_id,
            'image_name' => $file->getClientOriginalName(),
            'user_id' => Auth::id(),
        ]);

        if($Post->id){
            $destinationPath = public_path()."\uploads";
            $file->move($destinationPath,$file->getClientOriginalName());
            return $Post;
        } 
	}

	public function store_category(array $data){
		
        $category = Category::create([
            'cat_name'=>$data['catname'],
            'user_id'=> Auth::id()
        ]);

        return $category?$category:FALSE;
    }

    public function manage_post(){
    	return Auth::user()->posts;
    }

    public function edit_post($id){
    	$post = Post::findOrFail($id);
        $categories = Category::pluck('cat_name','id'); //select(['id','cat_name'])->get();
        return ['post'=>$post,'categories'=>$categories];
    }

    public function update_post($id,$data){
		$post = Post::find($id);
        $post->title = $data->title;
        $post->description = $data->description;
        $post->category_id = $data->category_id;
        if($post->save()){
        	return true;
        }
        else{
        	return false;
        }
    }

    public function delete_post($id){
    	$post = Post::findOrFail($id);
        if($post->id){
            $post->delete();
            return true;
        }
        else{
        	return false;
        }
    }

    public function delete_selected(array $ids){
    	if(Post::whereIn('id',$ids)->delete()){
    		return true;
    	}
    	else{
    		return false;
    	}
    }

    public function delete_all_posts(){
    	if(Post::query()->delete()){
    		return true;
    	}
    	else{
    		return false;
    	}
    }

    public function restore_posts(){
    	if(Post::query()->restore()){
           return true;
        }
    }

    public function manage_category(){
    	 return Auth::user()->categories;
    }

    public function edit_category($id){
    	return Category::findOrFail($id);
    }

    public function update_category($data,$id){
    	$category = Category::find($id);
        $category->cat_name = $data->cat_name;
        if($category->save()){
        	return true;
        }
    }

    public function delete_category($attributes){
    	if(isset($attributes->cat_id)){
            $category = Category::findOrFail($attributes->cat_id);
            if($category->id){
                $category->delete();
                return "catid";
            }
        }
       
        else if(is_array($attributes->cat_ids)){
            Category::whereIn('id',$attributes->cat_ids)->delete();
            return "catids";
        }
        else{
        	return false;
        }
    }

    public function restore_category(){
    	if(Category::query()->restore()){
            return true;
        }
    }

    public function delete_all_categories(){
    	if(Category::query()->delete()){
    		return true;
    	}
    }

    public function view_post($id){
    	return Post::find($id);
    }

    public function store_comment($data){
        $comment = Comment::create([
            'description'=>$data->comment,
            'post_id' => $data->post_id,
            'user_id' => Auth::id()
            ]);

        if($comment->id){
        	return $comment;
        }
        else{
        	return false;
    	}
    }


}
