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
    return view('LoginPage');
});
Route::get('/StudentDashboard', function (){
  return view('DashboardStudent');
});
Route::get('/registeration.html',function () {
   return view('registeration');
});
Route::get('/DashboardStudent',function () {
    return view('DashboardStudent');
});
Route::get('/profile',function () {
    return view('profile');
});
