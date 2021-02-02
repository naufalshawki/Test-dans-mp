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
    return view('welcome');
});
Route::post('/login/submit_register', 'Controller@register');
Route::post('/login/submit_login', 'Controller@login');
Route::get('login', 'Controller@form');
Route::get('logout', 'Controller@logout');
Route::get('getapi','Controller@getapi');
Route::get('jobs/{i}','Controller@getapi');
