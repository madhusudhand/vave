<?php

class Campaign extends \BaseEloquent {
    
    use SoftDeletingTrait;
    
    protected $table = 'campaigns';
    protected $primaryKey = 'camp_id';
    
	protected $fillable = [];
    protected $guarded = [];
    
}