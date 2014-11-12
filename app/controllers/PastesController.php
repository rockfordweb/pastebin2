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
  public $layout = 'layouts.master';

	public function index()
	{
		$pastes = Paste::orderBy('created_at','desc')->take(5)->get();
		$this->layout->content = View::make('index',array('pastes' => $pastes));
	}
	public function show($id)
	{
		$pastes = Paste::orderBy('created_at','desc')->take(5)->get();
		$paste = Paste::find($id);

    $this->layout->content = View::make('show',array(
      'paste' => $paste,
      'pastes' => $pastes
    ));
	}
  public function recent() {
		$pastes = Paste::orderBy('created_at','desc')->take(20)->get();
		$this->layout->content = View::make('recent',array('pastes' => $pastes));
  }
	public function create()
	{
		$paste = new Paste;
		$paste->title = Input::get('title');
		$paste->content = Input::get('content');
		$paste->syntax = Input::get('syntax');
		$paste->save();
		return Redirect::to('/paste/'.$paste->id);
	}

}
