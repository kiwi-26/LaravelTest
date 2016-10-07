<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/hello/', 'HelloController@index');
Route::get('/article/', 'ArticleController@index');
Route::get('/article/show/{id}', 'ArticleController@show');

Route::get('/', function () {
    return view('welcome');
});
