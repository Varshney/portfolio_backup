<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
	public $timestamps = false;

	protected $fillable = [
		"publication",
	];

	public function image() {
		return $this->hasOne("App\Image", "id", "image_id");
	}

	public function review() {
		return $this->belongsToMany("App\Review");
	}
}
