<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	public function project() {
		return $this->belongsToMany("App\Project");
	}
}
