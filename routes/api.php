<?php

use Illuminate\Http\Request;

Route::post('/register', 'API\AuthController@register');
Route::post('/login', 'API\AuthController@login');

// Require Authentication
Route::middleware('auth:api')->group(function(){
    Route::get('/user-profile', 'API\AuthController@profile');
    //category
    Route::get('/categories', 'Category\CategoryController@index');
    Route::get('/categories/{slug}', 'Category\CategoryController@show');
    Route::post('/categories/{slug}', 'Category\CategoryController@update');
    Route::delete('/categories/{slug}', 'Category\CategoryController@destroy');
    Route::post('/categories', 'Category\CategoryController@store');
});