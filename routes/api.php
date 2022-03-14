<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::GET('products', 'ApiController@products');
Route::GET('products/{id}', 'ApiController@productShow');
Route::GET('products/slug/{slug}', 'ApiController@productShowSlug');
Route::GET('brands', 'ApiController@brands');
Route::GET('kategoris', 'ApiController@kategoris');
Route::GET('articles', 'ApiController@articles');
Route::GET('akategoris', 'ApiController@akategoris');
Route::GET('brosurs', 'ApiController@brosurs');
Route::GET('sliders', 'ApiController@sliders');
