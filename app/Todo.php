<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = ['text','user_id','completed'];




}
