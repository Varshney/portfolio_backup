<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Software;
use App\Social;

class SoftwareController extends Controller
{
	public function index() {
		$software = Software::all();
		$social = Social::all();
		return view('admin.software', [
			"id" => $software,
			"software" => $software,
			"social" => $social,
		]);
	}
	public function create() {
		$software = Software::all();
		$social = Social::all();
		return view('admin.software.create', [
			"id" => $software,
			"software" => $software,
			"social" => $social,
		]);
	}
	public function store(Request $request) {
		$request->validate([
			"name" => "required",
		]);

		$software = new Software;
		$software->name = $request->name;
		$software->version = $request->version;
		$software->save();
		return redirect("/admin/software")->with("success", "Software added");
	}
	public function show($id) {
		return view('admin.software.show');
	}
	public function edit($id) {
		$software = Software::find($id);
		return view("admin.software.edit", compact("software"));
	}
	public function update(Request $request, $id) {
		$software = Software::find($id);
		$software->name = $request->get("name");
		$software->version = $request->get("version");
		$software->save();
		return redirect("/admin/software")->with("success", "Software updated");
	}
	public function destroy($id) {
		$software = Software::find($id);
		$software->delete();
		return redirect("/admin/software")->with("success", "Software deleted");
	}
}
