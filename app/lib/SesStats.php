<?php

//namespace Lib;
    
use Aws\Ses\SesClient;

class SesStats {

	public static function getStatistics($credentials)
	{
		$client = SesClient::factory($credentials);
        
        return $client->getSendQuota([])->toArray();
        
//        return ['quota'=>$client->getSendQuota([]),
//                'stats'=>$client->getSendStatistics([])
//               ];
        
        
	}

}
