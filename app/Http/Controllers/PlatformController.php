<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Platform;
use App\Social;

class PlatformController extends Controller
{
	public function index() {
		$platform = Platform::all();
		$social = Social::all();
		return view('admin.platforms', [
			"id" => $platform,
			"platform" => $platform,
			"social" => $social,			
		]);
	}

	public function create() {
		$platform = Platform::all();
		$social = Social::all();
		return view('admin.platform.create', [
			"id" => $platform,
			"platform" => $platform,
			"social" => $social,			
		]);
	}

	public function store(Request $request) {
		$request->validate([
			"platform" => "required",
			"abbreviation" => "required",
			"colour" => "required",
		]);
		$platform = new Platform;
		$platform->platform = $request->platform;
		$platform->abbreviation = $request->abbreviation;
		$platform->colour = $request->colour;
		$platform->save();
		return redirect("/admin/platforms")->with("success", "platform added");
	}

	public function show($id) {
		return view('admin.platform.show');
	}

	public function edit($id) {
		$platform = Platform::find($id);
		return view("admin.platform.edit", compact("platform"));
	}

	public function update(Request $request, $id) {
		$platform = Platform::find($id);
		$platform->platform = $request->get("platform");
		$platform->abbreviation = $request->get("abbreviation");
		$platform->colour = $request->get("colour");
		$platform->save();
		return redirect("/admin/platforms")->with("success", "platform updated");
	}

	public function destroy($id) {
		$platform = Platform::find($id);
		$platform->delete();
		return redirect("/admin/platforms")->with("success", "platform deleted");
	}
}
