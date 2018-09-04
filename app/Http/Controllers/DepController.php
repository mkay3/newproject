<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;

class DepController extends Controller
{
    //to test dependecy injection
	/*private $test;
	function __construct(Test $test){
		$this->test = $test;
		echo " object created by dependecy injection";
	}*/

	public function dashboard(Test  $test,$name){
		//dd($test);
		echo $name;
		dd(get_class($test));

	}

	public function index(){
		
	}
	public function formTest(){
		return view('viewtest');
	}


	public function viewTest(){
		return view('viewtest2')->with('data','<script>alert("Injected code"); </script><h3>laravel5.6</h3>');
	}
}
