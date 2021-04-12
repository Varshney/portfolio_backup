<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('publications', function (Blueprint $table) {
			$table->id();
			$table->string("publication");
			$table->bigInteger("image_id")->unsigned()->nullable();
			$table->foreign("image_id")->references("id")->on("images")->onDelete("cascade")->onUpdate("cascade");
			$table->string("url_type")->nullable();
			$table->string("url")->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('publications');
	}
}
