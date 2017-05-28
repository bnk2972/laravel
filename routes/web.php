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

Route::get('/home2', function () {
    return view('welcome');
});

Route::get('/jack', function () {
    return view('Jack');
});

Route::get('/item', 'UserController@index'); //->middleware('auth');
Route::delete('/item/delete/{id}', 'UserController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/login', 'Auth\LoginController@index');
// Route::post('login',['as'=>'login', 'uses'=>'Auth\LoginController@postLogin']);

Route::get('/member', 'MemberController@index')->middleware('auth');