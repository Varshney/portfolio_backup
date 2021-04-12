<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Social;

class ProjectController extends Controller
{
	public function index() {
		$project = Project::all();
		$social = Social::all();
		return view('admin.projects', [
			"id" => $project,
			"title" => $project,
			"social" => $social,
		]);
	}
	public function create() {
		return view('admin.project.create');
	}
	public function store(Request $request, $id) {
		return view('admin.project.store');
	}
	public function show($id) {
		return view('admin.project.show');
	}
	public function edit($id) {
		return view('admin.project.edit');
	}
	public function update($id) {
		return view('admin.project.update');
	}
	public function destroy($id) {
		return view('admin.project.destroy');
	}
}
