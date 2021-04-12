<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Social;

class SocialController extends Controller
{
	public function index() {
		$social = Social::all();
		return view('admin.socials', [
			"id" => $social,
			"social" => $social,
		]);
	}
	public function create() {
		$social = Social::all();
		return view('admin.social.create', [
			"social" => $social,
			"image_id" => $social,
			"url_type" => $social,
			"url" => $social,
		]);
	}
	public function store(Request $request) {
		$request->validate([
			"social" => "required",
		]);
		$social = new Social;
		$social->social = $request->social;
		if ($request->url != NULL) {
			$social->url_type = $request->url_type;
			$social->url = $request->url;
		}
		$social->image_id = $request->image;
		$social->save();
		return redirect("/admin/socials")->with("success", "Social platform added");
		// dd($social);

	}
	public function show() {
		return view('admin.show');
	}
	public function edit($id) {
		$social = Social::find($id);
		return view("admin.social.edit", compact("social"));
	}
	public function update(Request $request, $id) {
		$social = Social::find($id);
		$social->social = $request->get("social");
		$social->image_id = $request->get("image");
		$social->url_type = $request->get("url_type");
		$social->url = $request->get("url");
		$social->save();
		return redirect("/admin/socials")->with("success", "Social platofrm updated");
	}
	public function destroy($id) {
		$social = Social::find($id);
		$social->delete();
		return redirect("/admin/socials")->with("success", "Social platform deleted");
	}
}
