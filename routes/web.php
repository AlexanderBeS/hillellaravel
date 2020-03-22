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

Route::get('/count', 'CountController@increase');
Route::get('/calc', 'CalcController@index')->name('calc_form');
Route::post('/calc', 'CalcController@processOperation')->name('process_operation');


/* Hometask */
Route::get('/about', function () {
    return view('about');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/quotes', 'QuotesController@printQuote');


Route::resource('posts', 'PostController');