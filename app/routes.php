<?php

/*
...
*/

//Route::get('/', 'PagesController@index');
Route::get('/', 'PagesController@index');
Route::get('basic-data', 'PagesController@basicData');
Route::get('about', 'PagesController@about');

//SONGS RESOURCE
//==============
//Route::bind('song', function($slug) {
//  return is_numeric($slug) ? \Song::find($slug) : \Song::where('slug', $slug)->first();
//});

Route::get('songs', 'SongsController@index');
Route::get('songs/{song}', 'SongsController@show');

// USERS RESOURCE (MAIL EXAMPLE)

Route::resource('users', 'UsersController');

// LESSONS RESOURCE (laracasts.com/series/incremental-api-development/episodes/2)
//Route::group()
Route::group(['prefix' => 'api/v1'], function() {// adding a prefix - check with artisan routes
  Route::resource('lessons', 'LessonsController');
});
