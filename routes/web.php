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
    Route::get('detail/{id}', 'CrudController@detail')->name('detail');
    Route::get('edit/{id}', 'CrudController@edit')->name('edit');
    Route::get('delete/{id}', 'CrudController@delete')->name('delete');
//    Route::post('store_user', 'CrudController')->name('store_user');
});
Route::prefix('category')->group(function () {
    Route::get('','CategoryController@index')->name('index');
//    Route::post('store', 'CategoryController@store')->name('store');
//    Route::post('update', 'CrudController@update')->name('update');
    Route::get('category', 'CategoryController@show')->name('category');
//    Route::get('edit/{id}', 'CrudController@edit')->name('edit');
//    Route::get('delete/{id}', 'CrudController@delete')->name('delete');
//    Route::post('store_user', 'CrudController')->name('store_user');
});