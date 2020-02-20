<?php

Route::get('/', 'ProductController@index');
Route::get('/show/{id}', 'ProductController@show');
