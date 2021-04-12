<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function (Blueprint $table) {
			$table->id();
			$table->string("title")->required();
			// $table->bigInteger("category_id")->unsigned()->nullable();
			// $table->foreign("category_id")->references("id")->on("categories")->onDelete("cascade")->onUpdate("cascade");
			// $table->bigInteger("icon_id")->unsigned()->nullable();
			// $table->foreign("icon_id")->references("id")->on("images")->onDelete("cascade")->onUpdate("cascade");
			// $table->bigInteger("image_id")->unsigned()->nullable();
			// $table->foreign("image_id")->references("id")->on("images")->onDelete("cascade")->onUpdate("cascade");
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('projects');
	}
}
