<?php

class UsersController extends BaseController {

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

  public function register()
  {
    $this->layout->content = View::make('register');
  }

  public function create()
  {
    $user = new User;
    $password = Input::get('password');
    $email = Input::get('email');

    $user->email = $email;
    $user->password = Hash::make($password);

    if ($user->save()) {
      Auth::attempt(array('email' => $email, 'password' => $password));

      return Redirect::to('/');
    }
  }

  public function login()
  {
    $this->layout->content = View::make('login');
  }

  public function logout()
  {
    if (Auth::check()) {
      Auth::logout();

      return Redirect::to('/');
    }
  }

  public function editUser()
  {
    $this->layout->content = View::make('editUser');
  }
}
