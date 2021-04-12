<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reviews', function (Blueprint $table) {
			$table->id();
			$table->string("title")->required();
			$table->bigInteger("image_id")->unsigned()->default(0);
			$table->foreign("image_id")->references("id")->on("images")->onDelete("cascade")->onUpdate("cascade");
			$table->longText("description")->nullable();
			$table->bigInteger("platform_id")->unsigned()->default(0);
			$table->foreign("platform_id")->references("id")->on("platforms")->onDelete("cascade")->onUpdate("cascade");
			$table->string("url_type")->nullable();
			$table->string("url")->nullable();
			$table->date("date")->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('reviews');
	}
}
