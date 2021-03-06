<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['as'=>'home','uses'=>'HomeController@index']);
Route::get('/setup', ['as'=>'setup','uses'=>'SetupController@index']);
Route::get('/login', ['as'=>'login','uses'=>'HomeController@login']);
Route::post('/login', ['as'=>'login.check','uses'=>'HomeController@checkLogin']);
Route::get('/logout', ['as'=>'logout','uses'=>'HomeController@logout']);


Route::get('/ses', ['as'=>'ses','uses'=>'SesMailerController@index']);


Route::group(['prefix' => 'pages','before' => 'auth.basic'], function(){
    
    Route::get('/dashboard', ['as'=>'dashboard','uses'=>'PageController@dashboard']);
    Route::get('/reports', ['as'=>'lists','uses'=>'PageController@reports']);
    Route::get('/campaigns', ['as'=>'lists','uses'=>'PageController@campaigns']);
    Route::get('/lists', ['as'=>'lists','uses'=>'PageController@lists']);
    Route::get('/templates', ['as'=>'lists','uses'=>'PageController@templates']);
    
    
});




/* *************
    API Routes
   *************/

Route::group(['prefix' => 'api','before' => 'auth.basic'], function(){
    
    Route::get('/ses/statistics/{project}', ['as'=>'ses','uses'=>'SesStatsController@statistics']);
    
    
    Route::resource('project','ProjectController',
               ['only'=>['store','show','update','destroy']]);
    Route::get('/projects', 
               ['as'=>'projects', 'uses' => 'ProjectController@index']);
    
    
    Route::resource('project.template','ProjectController',
               ['only'=>['store','show','update','destroy']]);
    Route::get('/project/{project}/templates', 
               ['as'=>'project.templates', 'uses' => 'TemplateController@index']);
    
    
    Route::resource('project.list','ListController',
               ['only'=>['store','show','update','destroy']]);
    Route::get('/project/{project}/lists', 
               ['as'=>'project.lists', 'uses' => 'ListController@index']);
    
    
    Route::resource('list.subscriber','SubscriberController',
               ['only'=>['store','show','update','destroy']]);
    Route::get('/list/{list}/subscribers', 
               ['as'=>'list.subscribers', 'uses' => 'SubscriberController@index']);
    
    
    Route::resource('project.campaign','CampaignController',
               ['only'=>['store','show','update','destroy']]);
    Route::get('/project/{project}/campaigns', 
               ['as'=>'project.campaigns', 'uses' => 'CampaignController@index']);
    
    
});

