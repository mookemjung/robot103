<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*Route::get('/', function(){
	return 'ok';
});*/
Route::get('/', 'RobotController@callback');
Route::post('/', 'RobotController@callback');
Route::get('/home', function(){
	return 'home';
});