<?php

namespace App\Repositories\Blog;

use Illuminate\Http\Request;

interface BlogInterface{

	public function index();

	public function create_post();

	public function store_post($attributes);

	public function store_category(array $data);

	public function manage_post();

	public function edit_post($id);

	public function update_post($id,$attributes);

	public function delete_post($id);

	public function delete_selected(array $ids);

	public function delete_all_posts();

	public function restore_posts();

	public function manage_category();

	public function edit_category($id);

	public function update_category($data,$id);

	public function delete_category($data);

	public function restore_category();

	public function delete_all_categories();

	public function view_post($id);

	public function store_comment($request);






}