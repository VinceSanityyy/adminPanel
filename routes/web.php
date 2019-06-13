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


Auth::routes();



//Route::get('/dashboard', 'HomeController@test')->name('testhome');
//Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
// Route::get('users','UserController@index');
// Route::get('create','UserController@create');




//CRUD ROUTE COLLECTIVE
Route::resource('users','UserController');


Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::get('/logout', 'HomeController@logout');


Route::get('/', function () {
    return view('dashboard');

});

// Route::get('/dashboard', function(){
//     if(Auth::user()->isAdmin ==0){
//         return view('dashboard');
//     }
//     else{
//         $users['users'] = App\User::all();
//         return view('home',$users);
//     }
// });


