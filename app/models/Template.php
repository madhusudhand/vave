<?php

class Template extends \BaseEloquent {
    
    use SoftDeletingTrait;
    
    protected $table = 'templates';
    protected $primaryKey = 'tpl_id';
    
	protected $fillable = [];
    protected $guarded = [];
    
}