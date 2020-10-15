<?php

use App\Customer;
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

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'auth','prefix'=>'customer'], function () {
    Route::get('/','CustomerController@index')->name('customer.index');
    Route::get('/create','CustomerController@create')->name('customer.create');
    Route::post('/store','CustomerController@store')->name('customer.store');
    Route::get('/edit','CustomerController@edit')->name('customer.edit');
    Route::post('/update','CustomerController@update')->name('customer.update');
    Route::post('/delete','CustomerController@destroy')->name('customer.delete');
});

Route::group(['middleware'=>'auth','prefix'=>'analyst'], function () {
    Route::get('/','AnalystController@index')->name('analyst.index');
    Route::get('/create','AnalystController@create')->name('analyst.create');
    Route::post('/store','AnalystController@store')->name('analyst.store');
    Route::get('/edit','AnalystController@edit')->name('analyst.edit');
    Route::post('/update','AnalystController@update')->name('analyst.update');
    Route::post('/delete','AnalystController@destroy')->name('analyst.delete');
});

