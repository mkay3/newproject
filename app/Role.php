<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{   
 	
    public $timestamps = false;
    protected $fillable = ['role_name'];


    public function user(){
    	return $this->hasMany('App\User');
    }
}
