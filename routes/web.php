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

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/about', function () {
    return view('about');
}); */
Route::get('/about','AboutController@index');    //yesle /about url ma hanesia AboutController vanne controller ma janxa ani index vanne fucntion call garxa
