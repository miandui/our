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

Route::any('home/index','home\IndexController@index');
Route::any('home/guide','home\IndexController@guide');
Route::any('home/mine','home\IndexController@mine');
Route::any('home/refer','home\IndexController@refer');
Route::any('home/help','home\IndexController@help');
Route::any('home/edit','home\IndexController@edit');
Route::any('home/create/index','home\CreateController@index');
Route::any('home/create/common','home\CommonController@ajaxReturn');
Route::any('home/select/{id}/{can}','home\SelectController@index');
Route::any('home/mine/index','home\MineController@index');
Route::any('home/mu/index','home\IndexController@mu');






Route::any('home/login','home\LoginController@index');
Route::any('home/oauth','home\LoginController@oauth');



















































































































Route::any('home/common/check_sign','home\CommonController@check_sign');

