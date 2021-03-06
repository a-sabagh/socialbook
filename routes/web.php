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
    $currentRoute = Route::currentRouteName();
    return view('home',compact('currentRoute'));
})->name('socialbook');

Route::get('books', 'BookController@index')->name('Book.index');
Route::get('books/create','BookController@create')->name('Book.create');
Route::get('books/{id}', 'BookController@show')->name('Book.show');
Route::post('books','BookController@store')->name('Book.store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('books/{id}/edit','BookController@edit')->name('Book.edit');
Route::patch('books/{id}','BookController@update')->name('Book.update');

Route::post('categories/create','CategoryController@AjaxStore');
