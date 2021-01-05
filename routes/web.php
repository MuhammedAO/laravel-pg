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
})->name('welcome');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');



//controllers
Route::get('customers', 'CustomersController@index')->name('customers');
Route::get('customers/create', 'CustomersController@create')->name('customers.create');
Route::post('customers', 'CustomersController@store');
Route::get('customers/{customer}', 'CustomersController@show');
Route::get('customers/{customer}/edit', 'CustomersController@edit');
Route::patch('customers/{customer}', 'CustomersController@update');
Route::delete('customers/{customer}', 'CustomersController@destroy');