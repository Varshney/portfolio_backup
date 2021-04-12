<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Social;

class ImageController extends Controller
{
	public function index() {
		$image = Image::all();
		$social = Social::all();
		return view('admin.images', [
			"id" => $image,
			"image_name" => $image,
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
