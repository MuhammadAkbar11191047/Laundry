<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarController;
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

Route::get('/daftars', [DaftarController::class,'test']);
Route::get('/daftars/create', [DaftarController::class,'create']);
Route::post('/daftars/create', [DaftarController::class,'store']);
Route::get('/daftars/{$id}/edit', [DaftarController::class,'edit']);
Route::put('/daftars/{$id}', [DaftarController::class,'update']);
Route::delete('/daftars/{$id}', [DaftarController::class,'hapus']);


