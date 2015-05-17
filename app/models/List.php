<?php

class List extends \BaseEloquent {
    
    use SoftDeletingTrait;
    
    protected $table = 'lists';
    protected $primaryKey = 'list_id';
    
	protected $fillable = [];
    protected $guarded = [];
    
}