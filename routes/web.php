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
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola',[PostController::class,'index']);

Route::get('getAllProjects',[ProjectController::class,'getAllProjects']);
Route::get('getAllProjectsQueryBuilder',[ProjectController::class,'getAllProjectsQueryBuilder']);

