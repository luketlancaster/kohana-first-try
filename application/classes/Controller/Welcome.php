<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template {

    public $template = 'index';

    public function action_index()
    {
      $this->template->message = 'Hello there world!!';
    }  

} // End Welcome
