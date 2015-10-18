<?php

class PageController extends \BaseController {

	/**
	 * Display dashboard
	 *
	 * @return Response
	 */
	public function dashboard()
	{
		return View::make('app.templates.dashboard');
	}


    /**
	 * Display lists
	 *
	 * @return Response
	 */
	public function reports()
	{
		return View::make('app.templates.reports');
	}
    
	/**
	 * Display lists
	 *
	 * @return Response
	 */
	public function campaigns()
	{
		return View::make('app.templates.campaigns');
	}
    
    /**
	 * Display lists
	 *
	 * @return Response
	 */
	public function lists()
	{
		return View::make('app.templates.lists');
	}
    
    /**
	 * Display lists
	 *
	 * @return Response
	 */
	public function templates()
	{
		return View::make('app.templates.templates');
	}

}
