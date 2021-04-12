<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(["prefix" => "{Locale}"], function() {
	Route::get('/', function () {
	    return view('index');
	});

	Auth::routes();

	//////////////////
	// Main Website //
	//////////////////
	// Home
	Route::resource('/home', 'HomeController@index')->name("index");
	Route::get('/games', 'HomeController@games')->name('games');
	Route::get('/projects', 'HomeController@projects')->name('projects');
	Route::get('/reviews', 'HomeController@reviews')->name('reviews');
	Route::get('/tutorials', 'HomeController@tutorials')->name('tutorials');
	Route::get('/about', 'HomeController@about')->name('about');

	///////////////////
	// Admin Section //
	///////////////////
	Route::get("/admin/", "AdminController@index")->name("admin.index");
	Route::resource("/admin/about", "AboutController");
	Route::resource("/admin/categories", "CategoryController");
	Route::resource("/admin/files", "FileController");
	Route::resource("/admin/games", "GameController");
	Route::resource("/admin/images", "ImageController");
	Route::resource("/admin/platforms", "PlatformController");
	Route::resource("/admin/projects", "ProjectController");
	Route::resource("/admin/publications", "PublicationController");
	Route::resource("/admin/reviews", "ReviewController");
	Route::resource("/admin/socials", "SocialController");
	Route::resource("/admin/software", "SoftwareController");
	Route::resource("/admin/tutorials", "TutorialController");
	Route::get('lang/{lang}', 'LanguageController@switchLang')->name('lang.switch');
});