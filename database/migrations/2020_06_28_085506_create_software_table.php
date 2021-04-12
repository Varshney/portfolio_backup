<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoftwareTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('software', function (Blueprint $table) {
			$table->id();
			$table->string("name")->required();
			$table->string("version", 15)->nullable();
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
		Schema::dropIfExists('software');
	}
}
