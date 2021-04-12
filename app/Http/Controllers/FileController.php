<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use App\Social;

class FileController extends Controller
{
	public function index() {
		$file = File::all();
		$social = Social::all();
		return view('admin.files', [
			"id" => $file,
			"social" => $social,
		]);
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
