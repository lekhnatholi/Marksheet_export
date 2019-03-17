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
//
//Route::get('/', function () {
//    return view('frontend.index');
//});

Route::group(['namespace' => 'Frontend'],function (){
  Route::any('/','SiteController@index')->name('home');

});

//
//Route::namespace('Backend')->group(function (){
//    Route::any('/login','UsersController@login')->name('login');
//    Route::any('/logout','UsersController@logout')->name('logout');
//});
//
Route::group(['namespace'=> 'Backend'],function (){

    Route::any('/dashboard','UsersController@index')->name('dashboard');
});


