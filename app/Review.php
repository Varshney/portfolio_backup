<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
	public $timestamps = false;

	protected $fillable = [
		"title",
	];

	public function platform() {
		return $this->hasOne("App\Platform");
	}
	public function publication() {
		return $this->hasOne("App\Publication");
	}
	public function image() {
		return $this->hasOne("App\Image");
	}

}
