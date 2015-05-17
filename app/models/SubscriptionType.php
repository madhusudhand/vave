<?php

class SubscriptionType extends \BaseEloquent {
    
    use SoftDeletingTrait;
    
    protected $table = 'subscription_types';
    protected $primaryKey = 'st_id';
    
	protected $fillable = [];
    protected $guarded = [];
    
}