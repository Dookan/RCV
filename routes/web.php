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


Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
/*
|--------------------------------------------------------------------------
| admin routes
|--------------------------------------------------------------------------
*/
Route::get('admin/register', 'Auth\AdminRegisterController@showRegistrationForm')->name('admin.register');
Route::post('admin/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');
Route::get('admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

Route::prefix('admin')->middleware('auth:admin')->group(function(){   
    Route::get('/index-vehicles', 'VehicleController@index_admin')->name('index.vehicles');
    Route::get('/register-vehicle', 'VehicleController@create_admin')->name('register.vehicle');
    Route::post('/register-vehicle', 'VehicleController@store_admin')->name('register.vehicle.submit');
    Route::delete('/delete-vehicle/{id}', 'VehicleController@destroy')->name('delete.vehicle');
    Route::get('/index-users', 'AdminController@index_users')->name('index.users');
    Route::delete('/delete-user/{id}', 'AdminController@destroy')->name('delete.vehicle');
    Route::get('/index-policies', 'PoliciesController@index_admin')->name('index.policies');
    Route::get('/register-policy', 'PoliciesController@create_admin')->name('register.policy');
    Route::post('/register-policy', 'PoliciesController@create_admin')->name('register.policy.submit');
    Route::get('/index-prices', 'PoliciesController@index_prices_admin')->name('index.prices');
    Route::get('/register-price', 'PoliciesController@create_price')->name('register.price');
    Route::post('/register-price', 'PoliciesController@create_price')->name('register.price.submit');
    Route::get('/', 'AdminController@index')->name('admin');
});

/*
|--------------------------------------------------------------------------
| user routes
|--------------------------------------------------------------------------
*/
Route::prefix('user')->middleware('auth')->group(function(){
	Route::get('/register-vehicle', 'VehicleController@create')->name('user.register.vehicle');
	Route::post('/register-vehicle', 'VehicleController@store')->name('user.register.vehicle.submit');
	Route::get('/vehicles', 'VehicleController@index')->name('user.index.vehicles');
});


Auth::routes();