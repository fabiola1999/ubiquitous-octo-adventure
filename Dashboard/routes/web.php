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
    return view('pages.admin.welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/attendance_report', function(){
    return view('pages.user.attendance_report');
});
Route::get('/chat', function(){
    return view('pages.user.chat');
});
Route::get('/message', function(){
    return view('pages.user.message');
});

Route::get('/signin', function(){
    return view('signin');
});

Route::get('employee', function(){
    return view('pages.user.employee');
});

Route::get('notification_menu', function(){
    return view('pages.user.notification_menu');
});

Route::get('my_calendar', function(){
    return view('pages.user.My_calendar');
});

Route::get('my_task', function(){
    return view('pages.user.My_task');
});

