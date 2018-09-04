<?php

namespace App\Repositories\Todo;

use App\Todo;

class EloquentRepository implements TodoInterface
{
	protected $todomodel;

	public function __construct(Todo $anyvarname){

		$this->todomodel = $anyvarname;
	}

    public function getAll(){
    	return $this->todomodel->all();
    }

	public function getById($id){
		//return $this->todomodel->find($id);
		return $this->todomodel->find($id);
	}

	public function create(){
		//return $this->todomodel->abc();
	}

	public function store(array $attributes){
		//dd($attributes);
		//$this->todomodel->create
		return $this->todomodel->create($attributes);
	}

	public function update($id, array $attributes){
		$todo = $this->todomodel->findorfail($id);
		$todo->update($attributes);
		return $todo;
	}

	public function delete($id){
		$this->getById($id)->delete();
		return true;
	}

}