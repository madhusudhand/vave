<?php

//use Lib\SesStats;


class SesStatsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        try{
            $stats = SesStats::getStats(Project::getAwsCredentials(1));
            return $stats;
            return Response::json(array(
                'stats'=>$stats,
                'success'=>array(
                    'message' => 'ok',
                    'code' => 200
                )
            ));
            
        }catch(Exception $ex){
            return Response::json(array(
                'error'=>array(
                    'message' => 'exception',
                    'code' => 500
                )
            ));
        }
        
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
