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

Route::get('/article/show/{article}', function(App\Article $article){
    return view('article.show', ['article' => $article]);
});
Route::get('/article/edit/{article}', function(App\Article $article){
    return view('article.edit', ['article' => $article]);
});
Route::get('/article/delete/{article}', function(App\Article $article){
    return view('article.delete', ['article' => $article]);
});
Route::get('/article/complete', function(){
    return view('article.complete');
});
Route::get('/article/create', function(){
    return view('article.create');
});

Route::post('/article/store', 'ArticleController@store');
Route::post('/article/destroy', 'ArticleController@destroy');

Route::get('/', function () {
    return view('welcome');
});
