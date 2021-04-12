<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorialController extends Controller
{
	public function index() {
		return view('admin.tutorials');
	}
	public function create() {
		return view('admin.create');
	}
	public function store() {
		return view('admin.store');
	}
	public function show() {
		return view('admin.show');
	}
	public function edit() {
		return view('admin.edit');
	}
	public function update() {
		return view('admin.update');
	}
	public function destroy() {
		return view('admin.destroy');
	}
}
