<?php

class CampaignController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($proj_id)
	{
		try{
            $campaigns = DB::table('campaigns as c')
                        ->where('c.proj_id', $proj_id)
                        ->whereNull('c.deleted_at')
                        ->select('c.camp_id as camp_id',
                                 'c.camp_name as camp_name',
                                 'c.camp_desc as camp_desc',
                                 'c.status as status'
                                )
                        ->get();
        
            return Response::json(array(
                'campaigns'=>$campaigns,
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
