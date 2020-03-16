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

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/index-vehicles', 'VehicleController@index')->name('index.vehicles');
    Route::get('/register-vehicle', 'VehicleController@create')->name('register.vehicle');
    Route::post('/register-vehicle', 'VehicleController@store')->name('register.vehicle.submit');
    Route::get('/', 'AdminController@index')->name('admin');
});
