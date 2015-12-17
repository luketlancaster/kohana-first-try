<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {


    public $message = "Hello there wold!";

    public function action_index()
    {
    $view = View::factory('index');
        $this->response->body($view, $this->$message);
    }  

} // End Welcome
