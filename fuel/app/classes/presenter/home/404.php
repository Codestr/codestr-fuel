<?php

/**
 * The welcome 404 presenter.
 *
 * @package  app
 * @extends  Presenter
 */
class Presenter_Home_404 extends Presenter
{
	/**
	 * Prepare the view data, keeping this in here helps clean up
	 * the controller.
	 *
	 * @return void
	 */
	public function action_404()
	{
		$view = View::forge('home/404');
        
        $view->styles = View::forge('partials/_styles');
        $view->nav = View::forge('partials/_nav');
        $view->scripts = View::forge('partials/_scripts');
        return $view;
	}
}
