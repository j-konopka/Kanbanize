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

Route::get('/', function () {

//    $cm = new \App\Cron();
//
//    $cm->interativeCronStart();




    return view('home2');
});

Auth::routes();

//Route::get('/', 'HomeController@index')->name('home');

Route::get('/', 'ChartController@buildChart')->name('home');
Route::get('/charts', 'ChartController@buildChart')->name('home');
