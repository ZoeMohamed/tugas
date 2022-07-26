<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
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

Route::get('/',[SiswaController::class,'index']);

// Create routers

Route::get('/create',[SiswaController::class,'create']);

Route::post('/store',[SiswaController::class,'store']);

Route::get('/show/{id}',[SiswaController::class,'show']);


Route::post('/update/{id}',[SiswaController::class,'update']);


Route::get('/destroy/{id}',[SiswaController::class,'destroy']);
