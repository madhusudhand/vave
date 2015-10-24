<?php

class Project extends \BaseEloquent {
    
    use SoftDeletingTrait;
    
    protected $table = 'projects';
    protected $primaryKey = 'proj_id';
    
	protected $fillable = [];
    protected $guarded = [];
    
    public static function getAwsCredentials($id){
        $aws = Project::where('proj_id', $id)
                    ->select('iam_access_key',
                             'iam_secret_key',
                             'iam_region'
                            )
                    ->first();
        
        $c = array(
                'credentials' => array(
                    'key'    => $aws->iam_access_key,
                    'secret' => $aws->iam_secret_key,
                ),
                'region'  => $aws->iam_region,
             );
        
        return $c;
    }
    
}