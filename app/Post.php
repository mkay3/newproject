<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{   
	use SoftDeletes;
    protected $dates = ['deleted_at'];
    
	protected $fillable = ['title','description','image_name','user_id','category_id'];

    public function User(){
        return $this->belongsTo('App\User');
    }

    public function category(){
    	return $this->belongsTo('App\Category');
    }

    public function comments(){
    	return $this->hasMany('App\Comment');
    }

}
