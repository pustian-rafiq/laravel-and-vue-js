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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/posts', 'PostController@all_post');
Route::get('/category', 'PostController@all_category');

//Route for any path
Route::get('/{anypath}','HomeController@index')->where('path','.*');


//Category routes here
Route::post('/create-category', 'CategoryController@createCategory');