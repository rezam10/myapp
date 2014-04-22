<?php

class SessionsController extends \BaseController {

	
	public function getLogin()
	{
		return View::make('pages.public.login')->with(array(
													'title' => 'Login CloudCardiology',
													'description' => '
													login to cloud'));
	}

	public function postLogin()
	{
		$input = Input::all();

		$v = Validator::make($input, User::$rules);

		if ($v->fails()) {
			if(Request::ajax()){return Response::json($v->errors()->toArray());}
			return Redirect::to('/')->withErrors($v)->withInput();
		}else{
			$credentials = array(
						'email'    => Input::get('email'), 
						'password' => Input::get('password'));
			if (Auth::attempt($credentials)) {
				if(Request::ajax()){ return Response::json(array('redirect'));}
				return Redirect::intended('admin');
			}else{
				if(Request::ajax()){return Response::json(array('Username/Password incorrect'));}
				return Redirect::to('/')->with('login_error', 'Username/Password incorrect');
			}

		}
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::to('/');
	}

		public function getRegister()
	{
		return View::make('pages.public.register')->with(array(
													'title' => 'Login CloudCardiology',
													'description' => '
													Register to cloud'));
	}

	public function postRegister()
	{

		$input = Input::all();
		$rules = array('username' => 'required|min:6', 'email' => 'required|email', 'password' => 'required|min:6');

		$v = Validator::make($input, $rules);
		if ($v->fails()) {
			if(Request::ajax()){return Response::json($v->errors()->toArray());}
			return Redirect::back()->withErrors($v->errors())->withInput();
		}else{
			$userdate = array(
							'username' => Input::get('username'),
							'email'    => Input::get('email'),
							'password' => Hash::make(Input::get('password')) );
			$user = new User($userdate);
			$user->save();
			if(Request::ajax()){ 
				Session::flash('success_register', 'User successfuly created. Please Login.');
				return Response::json(array('redirect')); 
			}else{
				return Redirect::to('login')->with('success_register', 'User successfuly created. Please Login.');}
		}
	}

}