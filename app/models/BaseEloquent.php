<?php

class BaseEloquent extends \Eloquent {
    
    protected $dateFields = [];
    
    protected $dateFormat = 'Y-m-d H:m:s';
    
    
    private static function fomatDate($date){
        return date('Y-m-d', strtotime($date));
    }
    

    public static function boot()
    {
        parent::boot();

        static::saving(function($model)
        {
            foreach ($model->toArray() as $fieldName => $fieldValue) {
                if ( !($fieldValue=="0" || $fieldValue) ) {
                    //empty($fieldValue) 
                    $model->attributes[$fieldName] = null;
                }else if( in_array($fieldName, $model->dateFields) ){
                    $model->attributes[$fieldName] = BaseEloquent::fomatDate($model->attributes[$fieldName]);
                }
            }

            return true;
        });

    }
    
    
    
    

}
