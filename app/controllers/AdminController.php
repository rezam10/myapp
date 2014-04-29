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

	public function getEchoForm()
	{
		return View::make('pages.admin.echoform')->with(array('title' => 'CloudCardiology',
															'description' => 'My Site Description'));
	}

	public function getEchoReports()
	{
		return View::make('pages.admin.echoreports')->with(array('title' => 'CloudCardiology',
															'description' => 'My Site Description'));
	}
}