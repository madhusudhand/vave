<?php

class SubscriberController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($list_id)
	{
		try{
            $subscribers = DB::table('subscribers as s')
                        ->where('s.list_id', $list_id)
                        ->whereNull('s.deleted_at')
                        ->select('s.ls_id as ls_id',
                                 's.full_name as full_name',
                                 's.email as email',
                                 's.status as status'
                                )
                        ->get();
        
            return Response::json(array(
                'subscribers'=>$subscribers,
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
