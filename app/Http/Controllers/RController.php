<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Todo\TodoInterface;
//use App\Todo;

class RController extends Controller
{
	protected $todoInterface;

    public function __construct(TodoInterface $anyname){
    	$this->todoInterface = $anyname;
    }

    public function index(){
    	return $this->todoInterface->getAll();
    	//return Todo::all();
    }

    public function view($id){
    	return $this->todoInterface->getById($id);
    }

    public function delete($id){
    	 $this->todoInterface->delete($id);
    	 return true;
    }

    public function test(){
    	$data = ['text'=>'lets shop again','user_id'=>2,'completed'=>1];
    	 return $this->todoInterface->store($data);
    	 
    }
}
