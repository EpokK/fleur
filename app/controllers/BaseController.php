<?php

class BaseController extends Controller {
	// Layout
	protected $layout = 'layouts.master';
	// Nombre d'element par page
	protected $per_page = 10;
	
	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}