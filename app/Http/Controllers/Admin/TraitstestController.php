<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

trait test{
	public function test2(){
		echo "test 2";
	}
}

class TraitstestController extends Controller
{
	public function index(){

	}

	public function test1(){
		echo "test1";
	}
}

class a extends TraitstestController{

}
class b extends TraitstestController{

}
class c extends TraitstestController{

}
class d extends TraitstestController{

}

