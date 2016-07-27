<?php

class Controller_Services extends Controller
{
  public function action_services() {
		$view = View::forge('home/services');
    $view->styles = View::forge('partials/_styles');
    $view->nav_sub = View::forge('partials/_nav_sub');
    $view->scripts = View::forge('partials/_scripts');
    return $view;
	}
}
