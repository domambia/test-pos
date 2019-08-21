<?php

use Illuminate\Http\Request;

Route::post('/register', 'API\AuthController@register');
Route::post('/login', 'API\AuthController@login');

// Require Authentication
Route::middleware('auth:api')->group(function(){
    Route::get('/user-profile', 'API\AuthController@profile');
});