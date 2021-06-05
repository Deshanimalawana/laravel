<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\Usercontroller;

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


Route::view('/login', 'login');

Route::view('/profile', 'profile');

Route::view('log', 'log');

Route::get('logincontroller',[Logincontroller::class,'login']);

Route::get('yasiya',[Logincontroller::class,'name']);

Route::post('user',[Usercontroller::class,'getdata']);