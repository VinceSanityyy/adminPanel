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



//Route::get('/dashboard', 'HomeController@test')->name('testhome');
//Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
// Route::get('users','UserController@index');
// Route::get('create','UserController@create');




//CRUD ROUTE COLLECTIVE
Route::resource('users','UserController');

//CRUD COLLECTIVE NEWS
Route::resource('news', 'NewsController');

//CRUD COLLECTIVE ROADMAP
Route::resource('roadmap', 'RoadmapController');

//dashboard
Route::get('/home', 'HomeController@index')->name('home');


//coindeorosos
// Route::get('/coindeoro.com', 'GraphController@index');
Route::get('/', 'GraphController@index');

//for user logout
Route::get('/logout', 'HomeController@logout');

//coindeoro landing

// Route::get('/coindeoro', function () {
//     return view ('coindeoro.app');
// });


//home coin de oro
// Route::get('/coindeoro', function()
// {
//     // return view('coin.app');
//     return View::make('coin.news');
// });


//show individual news
// Route::get('/shownews', function()
//  {
// //     return view('coindeoro/newsmain');
//     return View::make('coindeoro.newsshow');
// });




Route::group(['middleware'=>['web']], function(){
    Route::get('/article/{id}', 'NewsController@showNews')->name('article');

});



//TEST FETCH DATA FROM SECOND DB
Route::get('/test', 'GraphController@test');

//comments
Route::post('comments/{news_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);
Route::get('comments/{id}/edit',['uses'=>'CommentsController@edit', 'as' => 'comments.edit']);
Route::put('comments/{id}',['uses'=>'CommentsController@update', 'as' => 'comments.update']);
Route::delete('comments/{id}',['uses'=>'CommentsController@destroy', 'as' => 'comments.destroy']);




