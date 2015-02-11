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

		$this->layout->content = View::make('index');
	}
	public function show($id)
	{
		
		$paste = Paste::find($id);

	    $this->layout->content = View::make('show',array(
	      'paste' => $paste
	    ));
	}
  public function recent() {
		
		$this->layout->content = View::make('recent');
  }
	public function create()
	{
		$status = 'new';
		if (Input::get('id')) {
			$status = 'update';
			$paste = Paste::find(Input::get('id'));
		} else {
			$paste = new Paste;
		}

		$paste->title = Input::get('title');
		$paste->content = Input::get('content');
		$paste->syntax = Input::get('syntax');
		if (Auth::check()) {
			$paste->user_id = Auth::id();	
		} //else default in sql column
		$paste->save();

		if (Request::ajax())
		{
			return Response::json(array('id' => $paste->id, 'url' => '/paste/'.$paste->id, 'title' => $paste->title, 'status' => $status));
		}

		return Redirect::to('/paste/'.$paste->id);
	}

}
