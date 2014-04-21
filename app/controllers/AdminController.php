<?php

class AdminController extends BaseController {

	public function getIndex()
	{
		$user = User::find(3);
		return View::make('pages.admin.index')->with(array('title' => 'CloudCardiology',
														   'description' => 'My Site Description',
														   'user' => $user));
	}

	public function getUpload()
	{
		return View::make('pages.admin.upload')->with(array('title' => 'CloudCardiology',
															'description' => 'My Site Description'));
	}
}