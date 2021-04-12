<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Publication;
use App\Social;
use App\Image;
use File;

class PublicationController extends Controller
{
	public function index() {
		$publication = Publication::all();
		$social = Social::all();
		return view('admin.publications', [
			"id" => $publication,
			"publication" => $publication,
			// "social" => $social,
		]);
	}

	public function create() {
		// $social = Social::all();
		return view('admin.publication.create', [
			// "social" => $social,
		]);
	}

	public function store($locale, Request $request) {
		$request->validate([
			"publication" => "required",
			// "image" => "image|mimes:jpg,jpeg,png|max:4096",
		]);
		$publication = new Publication;
		$publication->publication = $request->publication;

		// if ($request->hasFile("image")) {
		// 	$image = new Image;

		// 	if ($request->file()) {
		// 		$fileName = time() . "_" . $request->file("image")->getClientOriginalName();
		// 		$filePath = $request->file("image")->storeAs("uploads/images/publications", $fileName, "public");

		// 		$image->image_name = time() . "_" . $request->file("image")->getClientOriginalName();
		// 		$image->mime_type = $request->file("image")->getMimeType();
		// 		$image->image_path = "/storage/" . $filePath;
		// 		$image->save();
		// 		$image->id;

		// 		$publication->image_id = $image->id;
		// 	}
		// }

		if ($request->url != NULL) {
			// $publication->url_type = $request->url_type;
			$publication->url = $request->url;
		}

		$publication->save();
		return redirect("/{$locale}/admin/publications")->with("success", "Publication added");
	}

	public function show($locale, $id) {
		return view('admin.publication.show');
	}

	public function edit($locale, $id) {
		$publication = Publication::find($id);
		// $image = Image::find($publication->image_id);
		// dd($publication);
		// dd($image);
		return view('admin.publication.edit', compact("publication", "image"));
	}

	public function update($locale, Request $request, $id) {
		$request->validate([
			"publication" => "required",
			// "image" => "image|mimes:jpg,jpeg,png|max:4096",
		]);
		// dd($request);
		$publication = Publication::find($id);
		$publication->publication = $request->get("publication");
		// $publication->url_type = $request->get("url_type");
		$publication->url = $request->get("url");

		// if ($request->hasFile("image")) {
		// 	// dd("image added");
		// 	$image = Image::find($publication->image_id);
		// 	$path = "public/uploads/images/publications/" . $image->image_name;
			
		// 	if (Storage::exists($path)) {
		// 		// dd($image);
		// 		// $image->delete();
		// 		Storage::delete($path);

		// 		// $image = new Image;

		// 		if ($request->file()) {
		// 			$fileName = time() . "_" . $request->file("image")->getClientOriginalName();
		// 			$filePath = $request->file("image")->storeAs("uploads/images/publications", $fileName, "public");

		// 			$image->image_name = time() . "_" . $request->file("image")->getClientOriginalName();
		// 			$image->mime_type = $request->file("image")->getMimeType();
		// 			$image->image_path = "/storage/" . $filePath;
		// 			$image->save();
		// 			$image->id;

		// 			$publication->image_id = $image->id;
		// 		}
		// 	} else {
		// 		dd("Can't find the image");
		// 	}
		// } else {
		// 	// dd("no image added");
		// }

		$publication->save();
		return redirect("/{$locale}/admin/publications")->with("success", "Publication updated");
	}

	public function destroy($locale, $id) {
		$publication = Publication::find($id);
		// if (!$publication->image_id) {
			// dd("no image");
			$publication->delete();
		// } else {
		// 	$image = Image::find($publication->image_id);
		// 	$path = "public/uploads/images/publications/" . $image->image_name;
		// 	// dd($path);
		// 	if (Storage::exists($path)) {
		// 		// dd("File exists");
		// 		Storage::delete($path);
		// 		$publication->delete();
		// 		$image->delete();
		// 	} else {
		// 		dd("File does not exist.");
		// 	}
		// }
		return redirect('/{$locale}/admin/publications')->with("success", "Publication deleted");
	}
}
