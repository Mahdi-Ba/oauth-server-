<?php

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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
//    dd(Auth::user()->id);
    return view('welcome');
});
Route::get('/test', function () {
    dd( Request::header());

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
