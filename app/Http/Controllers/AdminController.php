<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Social;

class AdminController extends Controller
{
	public function index() {
		$social = Social::all();
		return view('admin.index', [
			"social" => $social,
			"url_type" => $social,
			"url" => $social,
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
