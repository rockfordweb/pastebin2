<?php

class PastesController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		$pastes = Paste::orderBy('created_at','desc')->take(5)->get();
		return View::make('index',array('pastes' => $pastes));
	}
	public function show($id)
	{
		$paste = Paste::find($id);

		return View::make('show',array('paste' => $paste));
	}
	public function create()
	{
		$paste = new Paste;
		$paste->title = Input::get('title');
		$paste->content = Input::get('content');
		$paste->save();
		return Redirect::to('/paste/'.$paste->id);
	}

}
