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

// Route::get('/', function () {
//     return view('template.post');
// });

Route::get('/', 'HomeController@index')->name('dashboard');

Route::resource('post', 'PostController');
Route::resource('alternatif', 'AlternativeController');
Route::resource('kriteria', 'CriteriaController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
