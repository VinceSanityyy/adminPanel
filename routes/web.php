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


// Auth::routes();

// Auth::routes(['verify' => true]);


Route::get('/adminlogin', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/adminlogin', 'Auth\LoginController@login');


// Registration Routes...
Route::get('register/', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register/', 'Auth\RegisterController@register');

Route::get('/', 'GraphController@index');

Route::get('/article/{id}', 'NewsController@showNews')->name('article');

//comments
Route::post('comments/{news_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);
Route::get('article/{id}/comment', 'NewsController@commentData');


Route::group(['middleware'=>['auth']], function(){

    Route::get('comments/{id}/edit',['uses'=>'CommentsController@edit', 'as' => 'comments.edit']);
    Route::put('comments/{id}',['uses'=>'CommentsController@update', 'as' => 'comments.update']);
    Route::delete('comments/{id}',['uses'=>'CommentsController@destroy', 'as' => 'comments.destroy']);


    //CRUD ROUTE COLLECTIVE
    Route::resource('users','UserController');
    //CRUD COLLECTIVE NEWS
    Route::resource('news', 'NewsController');
    //CRUD COLLECTIVE ROADMAP
    Route::resource('roadmap', 'RoadmapController');
    //dashboard
    Route::get('/home', 'HomeController@index')->name('home');
    //for user logout
    Route::get('/logout', 'HomeController@logout');
});
