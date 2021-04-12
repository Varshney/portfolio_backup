<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
	public $timestamps = false;

	protected $fillable = [
		"name",
	];
	public function image() {
		return $this->hasOne("App\Image");
	}
}
