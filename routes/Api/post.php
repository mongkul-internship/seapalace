<?php

Route::group(['prefix' => 'post'], function () {
    Route::get('', 'PostController@index');
    Route::get('{id}', 'PostController@getPostById');
});
