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
Route::get('', 'FrontendController@index')->name('home');
Route::get('about', 'FrontendController@about')->name('about');
Route::get('blog', 'FrontendController@blog')->name('blog');
Route::get('blog-single', 'FrontendController@blogSingle')->name('blog-single');
Route::get('contact', 'FrontendController@contact')->name('contact');
Route::get('gallery', 'FrontendController@gallery')->name('gallery');
Route::get('properties','FrontendController@properties')->name('properties');

Route::group(['prefix' => 'user'], function () {
    Route::get('','UserController@getUser')->name('user-list');
    Route::get('{id}','UserController@getUserId')->name('user-id');
});