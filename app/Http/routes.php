<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/about', 'AboutController@aboutUs');
Route::get('/', function () {
	return view('index');
});
Route::get('/gallery', 'GalleryController@index');
Route::get('/sermon', 'SermonController@index');
Route::get('/sermon/updateSundaySermon', 'SermonController@updateSundaySermon');
Route::get('/contactUs', 'AboutController@contactUs');
//Route::get('/about', 'AboutController@aboutUs');