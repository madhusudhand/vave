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

