<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('delete' , ['as' => 'delete' , 'uses'=>'HomeController@delete']);
Route::get('index' , ['as' => 'index' , 'uses'=>'HomeController@index']);
Route::get('menu' , ['as' => 'menu' , 'uses'=>'HomeController@menu']);
Route::get('about' , ['as' => 'about' , 'uses'=>'HomeController@about']);
Route::get('gallery' , ['as' => 'gallery' , 'uses'=>'HomeController@gallery']);
Route::get('planning' , ['as' => 'planning' , 'uses'=>'HomeController@planning']);
Route::get('contact' , ['as' => 'contact' , 'uses'=>'HomeController@contact']);
Route::get('booking' , ['as' => 'booking' , 'uses'=>'HomeController@booking']);
Route::get('login' , ['as' => 'login' , 'uses'=>'HomeController@login']);

Route::get('menu1' , ['as' => 'menu1' , 'uses'=>'HomeController@menu1']);
Route::get('menu2' , ['as' => 'menu2' , 'uses'=>'HomeController@menu2']);
Route::get('menu3' , ['as' => 'menu3' , 'uses'=>'HomeController@menu3']);
Route::get('menu4' , ['as' => 'menu4' , 'uses'=>'HomeController@menu4']);
Route::get('menu5' , ['as' => 'menu5' , 'uses'=>'HomeController@menu5']);
Route::get('menu6' , ['as' => 'menu6' , 'uses'=>'HomeController@menu6']);
Route::get('menu7' , ['as' => 'menu7' , 'uses'=>'HomeController@menu7']);
Route::get('menu8' , ['as' => 'menu8' , 'uses'=>'HomeController@menu8']);
Route::get('menu9' , ['as' => 'menu9' , 'uses'=>'HomeController@menu9']);
Route::get('menu10' , ['as' => 'menu10' , 'uses'=>'HomeController@menu10']);
Route::get('menu11' , ['as' => 'menu11' , 'uses'=>'HomeController@menu11']);
Route::get('menu12' , ['as' => 'menu12' , 'uses'=>'HomeController@menu12']);

Route::post('saveContact}' , ['as' => 'saveContact' , 'uses'=>'HomeController@saveContact']);
Route::post('savePlanning}' , ['as' => 'savePlanning' , 'uses'=>'HomeController@savePlanning']);
Route::post('userLogin}' , ['as' => 'userLogin' , 'uses'=>'HomeController@userLogin']);


