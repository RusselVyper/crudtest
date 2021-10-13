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
Route::get('', function () {
    return redirect()->action('App\Http\Controllers\crudController@read');
});

Route::get('read', 'App\Http\Controllers\crudController@read');
Route::post('create', 'App\Http\Controllers\crudController@create');
Route::post('update', 'App\Http\Controllers\crudController@update');
Route::post('delete', 'App\Http\Controllers\crudController@delete');
