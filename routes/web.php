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
  
   Route::any('/ExportClients','marksheetController@ExportClients');

    Route::any('/importExport', 'marksheetController@importExport')->name('importExport');

    Route::any('/downloadExcel/{type}', 'marksheetController@downloadExcel');

    Route::any('/importExcel', 'marksheetController@importExcel')->name('importExcel');



});

//
Route::namespace('Backend')->group(function (){
    Route::any('/login','UsersController@login')->name('login');
    Route::any('/logout','UsersController@logout')->name('logout');
});

Route::group(['namespace'=> 'Backend','prefix'=>'admin','middleware'=>'admin'],function (){

    Route::any('/','UsersController@index')->name('dashboard');
    Route::any('/view_marksheet','marksheetController@show')->name('view_marksheet');
    Route::any('/export','marksheetController@export')->name('export.pdf');

    Route::any('/ExportClients','marksheetController@ExportClients');

    Route::any('/importExport', 'marksheetController@importExport')->name('importExport');

    Route::any('/downloadExcel/{type}', 'marksheetController@downloadExcel');

    Route::any('/importExcel', 'marksheetController@importExcel')->name('importExcel');
});


