<?php

class TodosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id=null)
	{
		//
		if (is_null($id)) {
			$allTodos = Todo::all();
			return $allTodos;
		}
		else {
			$todo = Todo::find($id);
			return $todo;
		}
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
		$todo = dd(Todo::find($id));
		if (!$todo) {
			return Response::json([
				'error' => '404',
				'message' => 'Todo not found. Server refuses to handle this request',
				'error_code' => [
					'key1' => '403', 
					'key2' => 'first'
				]
				], 404);
		}
		return $todo;
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
