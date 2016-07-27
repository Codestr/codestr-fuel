<?php

class Controller_Home extends Controller
{
	public function action_index()
	{
		$view = View::forge('home/index');
  	$view->styles = View::forge('partials/_styles');
  	$view->nav = View::forge('partials/_nav');
  	$view->scripts = View::forge('partials/_scripts');
  	return $view;
	}

    public function action_services()
	{
		$view = View::forge('home/services');
    $view->styles = View::forge('partials/_styles');
    $view->nav_sub = View::forge('partials/_nav_sub');
    $view->scripts = View::forge('partials/_scripts');
    return $view;
	}

	public function action_404()
	{
		$view = View::forge('home/404');
    $view->styles = View::forge('partials/_styles');
    $view->nav = View::forge('partials/_nav_sub');
    $view->scripts = View::forge('partials/_scripts');
    return $view;
	}

}
