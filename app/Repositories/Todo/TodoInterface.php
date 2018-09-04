<?php

namespace App\Repositories\Todo;

interface TodoInterface
{

	public function getAll();

	public function getById($id);

	public function create();

	public function store(array $attributes);

	public function update($id, array $attributes);

	public function delete($id);

}

