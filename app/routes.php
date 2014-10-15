<?php

/*
...many comments in this file.  Very powerful stuff!
*/

Route::get('/', 'PagesController@index');
Route::get('basic-data', 'PagesController@basicData');
Route::get('about', 'PagesController@about');
Route::get('angular', function() {
  return View::make('angular.home');
});

//:>******************************************:</
//ANGULARJS INTEGRATION WITH MYSQL DATABASE  *:
// There is a lot going on here              *:
// Of particular importance                  *:
// Is the flow control                       *:
// Basically wholly handled client side      *:

Route::get('todos', function() {
  return Todo::all();
});
Route::post('todos', function() {
  return Todo::create(Input::all());
});

Route::get('songs', 'SongsController@index');
Route::get('songs/{song}', 'SongsController@show');



























// USERS RESOURCE (MAIL EXAMPLE)
Route::resource('users', 'UsersController');

//SONGS RESOURCE
//==============
//Route::bind('song', function($slug) {
//  return is_numeric($slug) ? \Song::find($slug) : \Song::where('slug', $slug)->first();
//});

// LESSONS RESOURCE (laracasts.com/series/incremental-api-development/episodes/2)
//Route::group()
Route::group(['prefix' => 'api/v1'], function() {// adding a prefix - check with artisan routes
  Route::resource('lessons', 'LessonsController');
});
