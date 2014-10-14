<?php

use \Song;

class SongsController extends \BaseController {

	public function index()
	{
    $songs = Song::get();

    return View::make('songs.index', compact('songs'));
	}

  public function show($slug) {
    $song = Song::whereSlug($slug)->first();
    
    return View::make('songs.show', compact('song'));
  }

}
