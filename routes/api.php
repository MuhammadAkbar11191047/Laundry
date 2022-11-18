<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
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

Route::get('/daftars', [ApiController::class,'test']);
Route::post('/daftars', [ApiController::class,'store']);
Route::get('/daftars/{$id}/edit', [ApiController::class,'edit']);
Route::get('/daftars/{$id}', [ApiController::class,'show']);
Route::put('/daftars/{$id}', [ApiController::class,'update']);
Route::delete('/daftars/{$id}', [ApiController::class,'hapus']);

Route::post('/login',[LoginController::class,'login']);
