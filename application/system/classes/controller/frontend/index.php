<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Frontend_Index extends Controller_Frontend_Template {

	public function action_index()
	{
		$this->template->content = View::factory('frontend/index/index');
	}

}