<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	public function category() {
		return $this->hasOne("App\Category");
	}
	public function image() {
		return $this->hasMany("App\Image");
	}
}
