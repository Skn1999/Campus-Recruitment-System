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
    return view('layouts.app');
});
Route::get('/home', function () {
    return view('layouts.app');
});

//controller for Company

Route::resource('/company', 'CompanyController');

//Controller for Institute

Route::resource('/institute', 'InstituteController');

Route::get('/login', function () {
    return view("login");
});

Route::post('/loginForm', [
    "middleware" => "Login",
    "uses" => "LoginController@showDashboard"
]);

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
