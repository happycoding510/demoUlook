<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['api', 'auth:providerapi']], function () {

    // user details update routes
    Route::post('logout', 'LoginController@logout');
    Route::get('/', 'UserController@index'); // update user
    Route::post('/', 'UserController@update');
    Route::post('/with', 'UserController@with');

    // location routes
    Route::post('location', 'LocationController@update'); // update location

    // setting routes
    Route::post('setting', 'UserCotroller@getSetting');

    // services
    Route::get('services', 'ServiceController@index');

    // location
    Route::post('location', 'LocationController@store');


});