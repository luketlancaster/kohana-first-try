<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template {

    public $template = 'index';

	public function action_index()
	{
        $this->$template->$message = 'Hey There World!!';
	}

    public function action_show()
    {

    }

} // End Welcome
