<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
	public $timestamps = false;

	protected $fillable = [
		"platform",
	];

	public function image() {
		return $this->hasOne("App\Image");
	}
	public function review() {
		return $this->belongsToMany("App\Review");
	}
}
