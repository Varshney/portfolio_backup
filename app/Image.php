<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
	public $timestamps = false;

	public function platform() {
		return $this->belongsTo("App\Platform");
	}
	public function publication() {
		return $this->belongsTo("App\Publication");
	}
	public function project() {
		return $this->belongsTo("App\Project");
	}
	public function review() {
		return $this->belongsTo("App\Review");
	}
	public function software() {
		return $this->belongsTo("App\Software");
	}
	public function tutorial() {
		return $this->belongsTo("App\Tutorial");
	}
}
