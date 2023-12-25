<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutCONTROLLER;
use App\Http\Controllers\AlproController;

/*
|--------------------------------------------------------------------------
| Web Routes
|-------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alpro',[AlproController::class,'index']);
Route::get('/alpro/create',[AlproController::class,'create']);
Route::post('/alpro/store',[AlproController::class,'store']);
Route::get('/alpro/{id}/edit',[AlproController::class,'edit']);
Route::put('/alpro/{id}',[AlproController::class,'update']);
Route::delete('/alpro/{id}',[AlproController::class,'destroy']);