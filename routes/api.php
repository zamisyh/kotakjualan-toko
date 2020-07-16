<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1'], function () {
    Route::name('api.')->group(function(){
        Route::get('users', 'Api\UserController@getAnggota')->name('anggota');
        Route::post('auth/login', 'Api\AuthController@login')->name('login');

        //Get Berdasarkan Id
        Route::get('users/idAnggota/{id}', 'Api\UserController@getIdAnggota');
        Route::get('users/idToko/{id}', 'Api\UserController@getIdToko');

        //Get All Toko
        Route::get('users/allToko', 'Api\UserController@getAllToko');
    });

    Route::group(['middleware' => 'auth:api'], function () {
        Route::post('users/create-toko', 'Api\TokoController@create_toko')->name('create.toko');
        Route::put('users/toko/update/{id}', 'Api\TokoController@updateToko');
        Route::delete('users/toko/delete/{id}', 'Api\TokoController@deleteToko');
    });
});
