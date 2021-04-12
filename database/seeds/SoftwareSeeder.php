<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SoftwareSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// DB::table("software")->insert([
		// 	"name" => Str::random(20),
		// ]);

		factory(App\Software::class, 5)->create()->each(
			function ($software) {
			$software->Software()->save(factory(App\Software::class)->make());
		});
	}
}
