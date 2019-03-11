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

Route::get('', 'CrudController@post')->name('post');
Route::get('contact', 'FrontendController@contact')->name('contact');
Route::get('gallery', 'FrontendController@gallery')->name('gallery');
Route::get('about', 'FrontendController@about')->name('about');
Route::get('properties', 'FrontendController@properties')->name('properties');


Route::group(['prefix' => 'post'], function () {
    Route::group(['middleware' => 'auth'], function () {
        Route::get('create', 'CrudController@create')->name('create');
        Route::post('store', 'CrudController@store')->name('store');
        Route::post('update', 'CrudController@update')->name('update');
        Route::get('post', 'CrudController@post')->name('post');
        Route::get('detail/{id}', 'CrudController@detail')->name('detail');
        Route::get('edit/{id}', 'CrudController@edit')->name('edit');
        Route::get('delete/{id}', 'CrudController@delete')->name('delete');
    });
});

Auth::routes();


