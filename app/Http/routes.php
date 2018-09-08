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
Route::get('/gallery/moreContentMission', 'GalleryController@moreContentForMission');
Route::get('/gallery/moreSmallContentMission', 'GalleryController@moreSmallContentForMission');
Route::get('/gallery/moreContentEvent', 'GalleryController@moreContentForEvent');
Route::get('/gallery/moreSmallContentEvent', 'GalleryController@moreSmallContentForEvent');
Route::get('/gallery/moreContentBefore2016', 'GalleryController@moreContentForBefore2016');
Route::get('/gallery/moreSmallContentBefore2016', 'GalleryController@moreSmallContentForBefore2016');
Route::get('/gallery/ContentPrayAndSermon', 'GalleryController@ContentForPrayAndSermon');
Route::get('/gallery/ContentRetreat', 'GalleryController@ContentForRetreat');
Route::get('/gallery/ContentEvent', 'GalleryController@ContentForEvent');
Route::get('/gallery/ContentMission', 'GalleryController@ContentForMission');
Route::get('/gallery/ContentBefore2016', 'GalleryController@ContentForBefore2016');
Route::get('/sermon/deleteSundaySermon/{id}', 'SermonController@deleteSundaySermon');
Route::get('/sermon/deletePastorStory/{id}', 'SermonController@deletePastorStory');
Route::get('/sermon/editSundaySermon/{id}', 'SermonController@editSundaySermon');
Route::get('/sermon/editPastorStory/{id}', 'SermonController@editPastorStory');
Route::get('/sermon/updateSundaySermon', 'SermonController@updateSundaySermon');
Route::get('/sermon/updatePastorStory', 'SermonController@updatePastorStory');
Route::get('/sermon', 'SermonController@index');
Route::get('/sermon/pastorStoryClick', 'SermonController@updatePastorStoryHitCount');
Route::get('/sermon/sundaySermon', 'SermonController@addSundaySermon');
Route::post('/sermon/sundaySermon', 'SermonController@addActionSundaySermon');
Route::get('/sermon/pastorStory', 'SermonController@addPastorStory');
Route::post('/sermon/pastorStory', 'SermonController@addActionPastorStory');
Route::get('/sermon/dailyWord', 'SermonController@getDailySermon');
Route::get('/sermon/dailySermon', 'SermonController@renderDailySermon');
Route::post('/sermon/dailySermon', 'SermonController@addDailySermon');
Route::get('/contactUs', 'AboutController@contactUs');
Route::get('/privacyPolicy', 'LandController@privacyPolicy');
Route::get('/landing', 'LandController@fetchInfo');
Route::get('/login', 'UserController@index');
Route::post('/login', 'UserController@postIndex');
Route::get('/logout', 'UserController@getLogOut');
Route::patch('/sermon/editSundaySermon/{id}', 'SermonController@editActionSundaySermon');
Route::patch('/sermon/editPastorStory/{id}', 'SermonController@editActionPastorStory');
Route::get('/gallery/addGallery', 'GalleryController@addGallery');
Route::post('/gallery/addGallery', 'GalleryController@addActionGallery');
Route::get('/gallery/editGallery/{id}', 'GalleryController@editGallery');
Route::patch('/gallery/editGallery/{id}', 'GalleryController@editActionGallery');
Route::get('/gallery/removeGallery', 'GalleryController@removeGallery');
Route::get('/editAnnouncement/{id}', 'LandController@editAnnouncement');
Route::patch('/editAnnouncement/{id}', 'LandController@editActionAnnouncement');
Route::get('/addAnnouncement', 'LandController@addAnnouncement');
Route::post('/addAnnouncement', 'LandController@addActionAnnouncement');
Route::get('/deleteAnnounce', 'LandController@deleteAnnouncement');
Route::get('/getPastorStory', 'LandController@getPastorStory');
Route::get('/playSermonAudio/{id}', 'SermonController@playSermonAudio');
Route::get('/downloadSermonAudio/{id}', 'SermonController@downloadSermonAudio');
Route::get('/about/addHistory', 'AboutController@addHistory');
Route::post('/about/addHistory', 'AboutController@addActionHistory');
Route::get('/about/editHistory/{id}', 'AboutController@editHistory');
Route::patch('/about/editHistory/{id}', 'AboutController@editActionHistory');
Route::get('/about/deleteHistory', 'AboutController@deleteHistory');

Route::get('/about/addLeader', 'AboutController@addLeader');
Route::post('/about/addLeader', 'AboutController@addActionLeader');
Route::get('/about/editLeader/{id}', 'AboutController@editLeader');
Route::patch('/about/editLeader/{id}', 'AboutController@editActionLeader');
Route::get('/about/deleteLeader', 'AboutController@deleteLeader');
Route::get('/help', 'AboutController@renderHelp');
Route::post('/help', 'AboutController@addHelp');
Route::get('/helplist', 'AboutController@renderHelpList');

//Route::get('/about', 'AboutController@aboutUs');