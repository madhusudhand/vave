<?php

use Aws\Ses\SesClient;

class SesMailerController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
        
        try{
            
            $client = SesClient::factory(array(
                'credentials' => array(
                    'key'    => '',
                    'secret' => '',
                ),
                'region'  => '',
            ));
            
            
//            $result = $client->sendRawEmail(array(
//                'Source' => 'news@tasketch.com',
//                'Destinations' => array('madhusudhan.dollu@gmail.com'),
//                // RawMessage is required
//                'RawMessage' => array(
//                    // Data is required
//                    'Data' => 'hi this is the raw message second time',
//                ),
//            ));
            
            
            $result = $client->sendEmail(array(
    // Source is required
    'Source' => '',
    // Destination is required
    'Destination' => array(
        'ToAddresses' => array(''),
        //'CcAddresses' => array('string', ... ),
        //'BccAddresses' => array('string', ... ),
    ),
    // Message is required
    'Message' => array(
        // Subject is required
        'Subject' => array(
            // Data is required
            'Data' => '',
            //'Charset' => 'string',
        ),
        // Body is required
        'Body' => array(
            'Text' => array(
                // Data is required
                'Data' => '',
                //'Charset' => 'string',
            ),
//            'Html' => array(
//                // Data is required
//                'Data' => 'string',
//                //'Charset' => 'string',
//            ),
        ),
    ),
//    'ReplyToAddresses' => array('string', ... ),
//    'ReturnPath' => 'string',
//    'SourceArn' => 'string',
//    'ReturnPathArn' => 'string',
));
            
            
            return $result['MessageId'];
            
        }catch(Exception $ex){
            return $ex;
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
