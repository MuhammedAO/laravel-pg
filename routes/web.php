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

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});


//cleaner
// Route::view('/', 'welcome');
// Route::view('contact', 'contact');
// Route::view('about', 'about');


//passing data to views
//we use the '.' or '/' to move between directories
Route::get('customers', function () {
    $customers = [
      'Mr A',
      'Mr b',
      'Mr c',
    ];
    return view('internals.customers',['customers' => $customers]);
});