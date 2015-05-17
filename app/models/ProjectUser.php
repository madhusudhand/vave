<?php

class ProjectUser extends \BaseEloquent {
    
    use SoftDeletingTrait;
    
    protected $table = 'project_users';
    protected $primaryKey = 'pu_id';
    
	protected $fillable = [];
    protected $guarded = [];
    
}