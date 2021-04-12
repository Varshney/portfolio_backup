<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Platform;
use App\Publication;
use App\Social;

class ReviewController extends Controller
{
	public function index() {
		$platform = Platform::all();
		$review = Review::all();
		$social = Social::all();
		$publication = Publication::all();
		return view('admin.reviews', [
			"id" => $review,
			"review" => $review,
			"platform_id" => $platform,
			"platform" => $platform,
			"social" => $social,
			"url_type" => $social,
			"url" => $social,
			"publication" => $publication,
		]);
	}

	public function create() {
		$platform = Platform::all();
		$social = Social::all();
		$publication = Publication::all();
		return view('admin.review.create', [
			"platform_id" => $platform,
			"platform" => $platform,
			"publication" => $publication,
			"social" => $social,
		]);
	}

	public function store(Request $request) {
		$request->validate([
			"title" => "required",
		]);
		$review = new Review;
		$review->title = $request->title;
		$review->description = $request->description;
		if ($request->url != NULL) {
			$review->url_type = $request->url_type;
			$review->url = $request->url;
		}
		$review->platform_id = $request->platform;
		$review->date = $request->date;
		$review->save();
		return redirect("/admin/reviews")->with("success", "Review added");
	}

	public function show($id) {
		return view('admin.review.show');
	}

	public function edit($id) {
		$review = Review::find($id);
		return view("admin.review.edit", compact("review"));
	}

	public function update(Request $request, $id) {
		$review = Review::find($id);
		$review->title = $request->get("title");
		$review->description = $request->get("description");
		$review->image_id = $request->get("image");
		$review->url_type = $request->get("url_type");
		$review->url = $request->get("url");
		$review->platform_id = $request->get("platform");
		$review->date = $request->get("date");
		$review->save();
		return redirect("/admin/reviews")->with("success", "Review updated");
	}

	public function destroy($id) {
		$review = Review::find($id);
		$review->delete();
		return redirect("/admin/reviews")->with("success", "Review deleted");
	}
}
