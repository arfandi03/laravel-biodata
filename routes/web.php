<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Route::group([
    'namespace'=>'App\\Http\\Controllers',
],function () {

    Route::get('login','LoginController@formLogin')->name('login');
    Route::get('register','RegisterController')->name('register');
    Route::post('login','LoginController@login');
    Route::post('register','RegisterController@register');

    Route::middleware(['auth:web'])->group(function () {
        Route::post('logout','LoginController@logout')->name('logout');
        Route::view('/','biodata/dashboard')->name('dashboard');
        Route::view('/post','biodata/data-post')->name('post')->middleware('can:role,"admin","aplicant"');
        Route::view('/admin','biodata/data-admin')->name('admin')->middleware('can:role,"admin"');
    });
});
