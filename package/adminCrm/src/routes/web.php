<?php
// use Illuminate\Support\Facades\Route;
use Kartikey\AdminCrm\Http\controllers\admin\Auth\AuthenticatedSessionController;

Route::group(['namespace'=>'Kartikey\AdminCrm\Http\controllers','middleware' => 'web'],function(){

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::namespace('Auth')->group(function(){
        Route::get('login','AuthenticatedSessionController@create')->name('login');
        Route::post('login','AuthenticatedSessionController@store')->name('login');
        });

        Route::get('dashboard','AdminController@index')->name('dashboard');
    });

});

