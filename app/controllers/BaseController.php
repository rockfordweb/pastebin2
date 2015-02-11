<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);

		$recentPastes = Paste::orderBy('created_at','desc')->take(5)->get();

		$authCheckResult = Auth::check();
    	
    	if ($authCheckResult) {
    		$loggedInUser = Auth::user();
    		$userPastes = $loggedInUser->pastes;

    		View::share('userPastes', $userPastes);
    		View::share('user', $loggedInUser);
    	}
    	
      View::share('loggedIn', $authCheckResult);
      View::share('pastes', $recentPastes);
		}
	}

}
