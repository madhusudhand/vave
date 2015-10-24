<?php

class TemplateController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($proj_id)
	{
		try{
            $templates = DB::table('templates as tpl')
                        ->where('tpl.proj_id', $proj_id)
                        ->whereNull('tpl.deleted_at')
                        ->select('tpl.tpl_id as tpl_id',
                                 'tpl.tpl_name as template_name',
                                 'tpl.tpl_desc as template_desc',
                                 'tpl.tpl_content as template_content'
                                )
                        ->get();
        
            return Response::json(array(
                'templates'=>$templates,
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
