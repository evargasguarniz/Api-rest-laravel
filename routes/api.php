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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

// Me crea 5 rutas para  los metodos del controlador
//Route::apiResource('v1/posts',App\Http\Controllers\Api\v1\PostController::class);


use App\Http\Controllers\Api\v1\PostController as PostV1;
use App\Http\Controllers\Api\v2\PostController as PostV2;

use App\Http\Controllers\Api\LoginController;
use App\Models\Post;

//V1
Route::apiResource('v1/posts', PostV1::class)
    ->only(['index','show','destroy'])
    ->middleware('auth:sanctum');

// v2
Route::apiResource('v2/posts', PostV2::class)
    ->only(['index','show'])
    ->middleware('auth:sanctum');

Route::post('login', [LoginController::class, 'login']);
