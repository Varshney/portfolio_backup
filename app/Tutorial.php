<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
	public function image() {
		return $this->hasOne("App\Image");
	}
}
