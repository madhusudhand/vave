<?php

class Subscriber extends \BaseEloquent {
    
    use SoftDeletingTrait;
    
    protected $table = 'subscribers';
    protected $primaryKey = 'sub_id';
    
	protected $fillable = [];
    protected $guarded = [];
    
}