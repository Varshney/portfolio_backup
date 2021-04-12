<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlatformsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('platforms', function (Blueprint $table) {
			$table->id();
			$table->string("platform");
			$table->string("abbreviation", 10);
			$table->string("colour");
			$table->bigInteger("image_id")->unsigned()->nullable();
			$table->foreign("image_id")->references("id")->on("images")->onDelete("cascade")->onUpdate("cascade");
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('platforms');
	}
}
