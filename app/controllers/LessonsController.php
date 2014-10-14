<?php

use \Lesson;

class LessonsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
    $lessons = Lesson::get();
		return View::make('lessons.index', compact('lessons'));
	}


}
