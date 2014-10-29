<?php

class NerdsController extends \BaseController {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    //
    $nerds = Nerd::all();
    return View::make('nerds.index')
      ->with('nerds', $nerds);
    //^ load the view and pass the nerds
  }


  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    //
    return View::make('nerds.create');
  }


  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
    //
    $rules = array(
      'name' => 'required',
      'email' => 'required|email',
      'nerd_level' => 'required'
      );
    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {
      return Redirect::to('nerds/create')
        ->withErrors($validator)
        ->withInput(Input::except('password'));
        Session::flash('message', 'Please correct the following errors:');
    } else {
      // store
      $nerd = new Nerd;
      $nerd->name               = Input::get('name');
      $nerd->email              = Input::get('email');
      $nerd->nerd_level         = Input::get('nerd_level');
      $nerd->save();

      // Redirect
      Session::flash('message', 'Successfully created nerd!');
      return Redirect::to('nerds');
    }
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


}
