<?php

class Controller_404 extends Controller
{
	public function action_404()
	{
		$view = View::forge('home/404');
    $view->styles = View::forge('partials/_styles');
    $view->nav = View::forge('partials/_nav_sub');
    $view->scripts = View::forge('partials/_scripts');
    return $view;
	}
}
