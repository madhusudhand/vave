<?php

class Subscription extends \BaseEloquent {
    
    use SoftDeletingTrait;
    
    protected $table = 'subscriptions';
    protected $primaryKey = 'sbn_id';
    
	protected $fillable = [];
    protected $guarded = [];
    
}