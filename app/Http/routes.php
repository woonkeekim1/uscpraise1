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
Route::get('/about/moreHistory', 'AboutController@moreHistory');
Route::get('/', 'LandController@index');
Route::get('/gallery', 'GalleryController@index');
Route::get('/gallery/moreContentPrayAndSermon', 'GalleryController@moreContentForPrayAndSermon');
Route::get('/gallery/moreSmallContentPrayAndSermon', 'GalleryController@moreSmallContentForPrayAndSermon');
Route::get('/gallery/moreContentRetreat', 'GalleryController@moreContentForRetreat');
Route::get('/gallery/moreSmallContentRetreat', 'GalleryController@moreSmallContentForRetreat');
Route::get('/gallery/ContentPrayAndSermon', 'GalleryController@ContentForPrayAndSermon');
Route::get('/gallery/ContentRetreat', 'GalleryController@ContentForRetreat');
Route::get('/sermon', 'SermonController@index');
Route::get('/sermon/updateSundaySermon', 'SermonController@updateSundaySermon');
Route::get('/contactUs', 'AboutController@contactUs');
Route::get('/privacyPolicy', 'LandController@privacyPolicy');
//Route::get('/about', 'AboutController@aboutUs');