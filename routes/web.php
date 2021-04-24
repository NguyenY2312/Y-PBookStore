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
    return view('FrontEnd/index');
});
Route::get('/VeChungToi', function () {
    return view('FrontEnd/about');
});
Route::get('/DangNhap', function () {
    return view('Login/Login');
});