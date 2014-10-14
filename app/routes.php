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

Route::get('lessons', 'LessonsController@index');
