<?php

use Illuminate\Http\Request;

Route::post('auth/register', 'AuthController@register');
Route::post('auth/login', 'AuthController@login');
Route::get('users', 'UserController@users');
Route::get('users/profile', 'UserController@profile')->middleware('auth:api');
Route::get('users/profile/{id}', 'UserController@profileById')->middleware('auth:api');
Route::post('content', 'PostController@add')->middleware('auth:api');
Route::put('content/update/{post}', 'PostController@update')->middleware('auth:api');
Route::delete('content/update/{post}', 'PostController@delete')->middleware('auth:api');
