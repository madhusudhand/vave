<?php

use Aws\Ses\SesClient;

class SesStats {

	public function getStats($credentials)
	{
		$client = SesClient::factory($credentials);
        
        return $client->getSendStatistics([]);
        
//        return ['quota'=>$client->getSendQuota([]),
//                'stats'=>$client->getSendStatistics([])
//               ];
        
        
	}

}
