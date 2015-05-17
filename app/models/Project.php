<?php

class Project extends \BaseEloquent {
    
    use SoftDeletingTrait;
    
    protected $table = 'projects';
    protected $primaryKey = 'proj_id';
    
	protected $fillable = [];
    protected $guarded = [];
    
}