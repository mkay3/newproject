<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{   
	use SoftDeletes;

	protected $dates = ['deleted_at'];
	
	protected $fillable = [
        'cat_name','user_id'
    ];

    public function posts(){
    	return $this->hasMany('App\Post');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
