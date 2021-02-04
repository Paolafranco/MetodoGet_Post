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

Route::get('user', 'App\Http\Controllers\UserController@user')->name('product.user');
Route::post('user', 'App\Http\Controllers\UserController@user')->name('product.user');

Route::get('group', 'App\Http\Controllers\GroupController@group')->name('product.group');
Route::post('group', 'App\Http\Controllers\GroupController@group')->name('product.group');

Route::get('level', 'App\Http\Controllers\LevelController@level')->name('product.level');
Route::post('level', 'App\Http\Controllers\LevelController@level')->name('product.level');
