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

Route::get('/',
    function () {
    return view('welcome');
});
Auth::routes();
Route::get('/customeradd','CustomerController@create');
Route::post('/customeradd','CustomerController@store');
Route::get('/customer','CustomerController@index');
Route::get('/customer/{id}','CustomerController@detail');
Route::get('/customer/edit/{id}','CustomerController@edit');
Route::post('/customer/edit','CustomerController@update');
Route::get('/customer/delete/{id}','CustomerController@delete');

Route::get('/test',function () {
    return view('test');
});

//Route::get('/posts','PostController@index');
//Route::get('/posts/create','PostController@create');
//Route::post('/posts','PostController@store');
//Route::get('/posts/{id}','PostController@show');
//Route::get('/posts/{id}/edit','PostController@edit');
//Route::patch('/posts/{post}','PostController@update');
//Route::delete('/posts/{post}','PostController@destroy');
Route::resource('/posts','PostController');



Route::get('/home', 'HomeController@index')->name('home');
