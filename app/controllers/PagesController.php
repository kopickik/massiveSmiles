<?php

use \Illuminate\Contracts\Events\Dispatcher;

class PagesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$lessons = ['My First Lesson', 'My Second Lesson', 'My Third Lesson'];
		$name = 'John Doe';
		// return View::make('pages.home', ['lessons' => $lessons, 'name' => $name]);
		// return View::make('pages.home', compact('lessons')); -- same
		// return View::make('pages.home')->with('lessons', $lessons); -- same
		return View::make('pages.home', compact('lessons', 'name'));
		//$dispatcher->fire('UserHasLoggedIn');
	}

	public function basicData()
	{
		$lessons = ['My First Lesson', 'My Second Lesson', 'My Third Lesson'];
		$name = 'John Doe';
		// return View::make('pages.home', ['lessons' => $lessons, 'name' => $name]);
		// return View::make('pages.home', compact('lessons')); -- same
		// return View::make('pages.home')->with('lessons', $lessons); -- same
		return View::make('pages.home', compact('lessons', 'name'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function about()
	{
		return View::make('pages.about');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
	/* laracasts.com/lessons/the-observer-design-pattern-in-php

	Event::listen('UserHasLoggedIn', function() {
	  var_dump('fire off an email.');
	});

	Event::listen('UserHasLoggedIn', function() {
	  var_dump('do some reporting.');
	});*/


}
