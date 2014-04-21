<?php

class HomeController extends BaseController {

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

	public function getIndex()
	{
		return View::make('pages.public.index')->with(array(
													'title' => 'CloudCardiology',
													'description' => 'My Site Description'));
	}

	public function getAbout()
	{
		return View::make('pages.public.about')->with(array(
													'title' => 'Contact CloudCardiology',
													'description' => 'My Site Description'));
	}

	public function getContact()
	{
		return View::make('pages.public.contact')->with(array(
													'title' => 'Contact CloudCardiology',
													'description' => 'My Site Description'));
	}

	public function postMail()
	{

    	$data = Input::all();
    	$rules = array('name' => 'required|min:2', 'email' => 'required|email', 'message' => 'required|min:10');

    	$v = Validator::make($data, $rules);

    	if ($v->fails()) {
			return Redirect::to('contact')->withErrors($v)->withInput();
		}else{

		    Mail::queue('emails.contact', $data, function($m){
		        $m->to('rezam10@yahoo.com');
		    });

		    return Redirect::to('contact')->with('success', 'Message successfuly sent!');
		}
	}



}