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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//timesheets

Route::get('/time/all', 'TimesheetController@view_all')->name('all_timesheets');

Route::resource('time', 'TimesheetController');

Route::delete('/time/{id}', 'TimesheetController@destroy');

Route::resource('over', 'OvertimeController');

Route::get('/over/all', 'OvertimeController@view_all')->name('all_overtimes');
