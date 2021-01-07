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

//views
Route::view('/', 'welcome')->name('welcome');
Route::view('about', 'about')->name('about');


//contact controller 
Route::get('contact', 'ContactFormController@create')->name('contact.create');
Route::post('contact', 'ContactFormController@store')->name('contact.store');

//customer controllers
Route::get('customers', 'CustomersController@index')->name('customers');
Route::get('customers/create', 'CustomersController@create')->name('customers.create');
Route::post('customers', 'CustomersController@store')->name('customers.store');
Route::get('customers/{customer}', 'CustomersController@show')->name('customers.show');
Route::get('customers/{customer}/edit', 'CustomersController@edit')->name('customers.edit');
Route::patch('customers/{customer}', 'CustomersController@update')->name('customers.update');
Route::delete('customers/{customer}', 'CustomersController@destroy')->name('customers.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
