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
Route::get('user/{id}/{name}', function ($index, $name) {
    return 'tham so truyen vao' .$index . ' --- ' .$name;
});
Route::get('hello', 'helloController@hello');
