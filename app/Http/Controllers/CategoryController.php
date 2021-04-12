<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Social;

class CategoryController extends Controller
{
	public function index() {
		$category = Category::all();
		$social = Social::all();
		return view('admin.categories', [
			"id" => $category,
			"category" => $category,
			"social" => $social,
		]);
	}
	public function create() {
		$category = Category::all();
		$social = Social::all();
		return view('admin.categories.create', [
			"id" => $category,
			"category" => $category,
			"social" => $social,
		]);
	}
	public function store(Request $request) {
		return view('admin.store');
	}
	public function show($id) {
		return view('admin.show');
	}
	public function edit($id) {
		return view('admin.edit');
	}
	public function update(Request $request, $id) {
		return view('admin.update');
	}
	public function destroy($id) {
		return view('admin.destroy');
	}
}
