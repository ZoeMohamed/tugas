<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SeragamController;
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

Route::get('/seragam',[SeragamController::class,'index']);

// Create routers
Route::group(['prefix' => "siswa"],function(){
    Route::get('/',[SiswaController::class,'index']);

    Route::get('/create',[SiswaController::class,'create']);

    Route::post('/store',[SiswaController::class,'store']);
    
    Route::get('/show/{id}',[SiswaController::class,'show']);
    
    
    Route::post('/update/{id}',[SiswaController::class,'update']);
    
    
    Route::get('/destroy/{id}',[SiswaController::class,'destroy']);
    
});

// Create routers
Route::group(['prefix' => "seragam"],function(){
    Route::get('/',[SeragamController::class,'index']);

    Route::get('/create',[SeragamController::class,'create']);

    Route::post('/store',[SeragamController::class,'store']);
    
    Route::get('/show/{id}',[SeragamController::class,'show']);
    
    
    Route::post('/update/{id}',[SeragamController::class,'update']);
    
    
    Route::get('/destroy/{id}',[SeragamController::class,'destroy']);
    
});