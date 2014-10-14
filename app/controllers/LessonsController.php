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
		// The reason this is bad:
		$lessons = Lesson::all();
		// 1. Returning *every single lesson* - what happens when it has 1000s of lessons?
		// RULE: All is bad.
		// 2. No way to attach meta data.
		// 3. What is being returned is exactly the structure of our database table.
		// RULE: Linking db structure to the API output - awful
		// 4. No way to *signal error codes**, response codes*HTTP*

		return Response::json([
				'data' => $lessons->toArray()
			], 200);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
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
		$lesson = Lesson::find($id);

		if ( ! $lesson ) {
			return Response::json([
				''
				]);
		}
		return Response::json([
			'data' => $lesson
			]);
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


}
