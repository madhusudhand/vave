<?php

//use Lib\SesStats;


class SesStatsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function statistics($proj_id)
	{
        try{
            $stats = SesStats::getStatistics(Project::getAwsCredentials($proj_id));
            return Response::json(array(
                'statistics'=>$stats,
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

}
