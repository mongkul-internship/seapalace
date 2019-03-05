<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('', 'FrontendController@home')->name('home');
Route::get('contact', 'FrontendController@contact')->name('contact');
Route::get('gallery', 'FrontendController@gallery')->name('gallery');
Route::get('properties', 'FrontendController@gallery')->name('properties');

Route::prefix('post')->group(function () {
    Route::get('create', 'CrudController@create')->name('create');
    Route::post('store', 'CrudController@store')->name('store');
    Route::post('update', 'CrudController@update')->name('update');
    Route::get('show', 'CrudController@show')->name('show');
    Route::get('edit/{id}', 'CrudController@edit')->name('edit');
    Route::get('delete/{id}', 'CrudController@delete')->name('delete');
});
