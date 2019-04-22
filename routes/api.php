<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/products', 'ProductController@index');
Route::get('/brands', 'BrandController@index');
Route::post('/upload-image-product', 'ProductController@uploadImage');
Route::post('/product', 'ProductController@store');

Route::post('/register', 'AuthController@register');

Route::post('/login', 'AuthController@login');
Route::post('/logout', 'AuthController@logout');
