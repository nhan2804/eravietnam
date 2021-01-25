<?php

use Illuminate\Support\Facades\Route;

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
    return view('page.home');
});
Route::get('/login', function () {
    return view('page.login');
});
Route::post('/login','UserController@login');

Route::prefix('dashboard')->middleware(['login'])->group(function () {
	Route::get('/video','DashboardController@video');
	Route::get('/user/export-test','DashboardController@test_export');
	Route::get('/user/export','DashboardController@export');
    Route::resource('/user','DashboardController');
    
});

Route::prefix('admin')->group(function () {
    Route::resource('/user','Admin\AdminController');
});