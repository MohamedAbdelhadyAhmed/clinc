<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/','site.pages.index')->name('index');
Route::view('/majors','site.pages.majors')->name('majors');
Route::view('/doctor-booking','site.pages.doctor-booking')->name('doctor-booking');
Route::view('/doctors','site.pages.doctors')->name('doctors');
Route::view('/login','site.pages.login')->name('login');
Route::view('/register','site.pages.register')->name('register');

