<?php

use App\Http\Controllers\MakananTradisionalController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MakananTradisionalController::class, 'index']);
Route::get('/tambah', [MakananTradisionalController::class, 'tambah']);
Route::post('/tambah', [MakananTradisionalController::class, 'store']);
Route::get('/hapus/{id}', [MakananTradisionalController::class, 'hapus']);
Route::get('/edit/{id}', [MakananTradisionalController::class, 'edit']);
Route::post('/edit/{id}', [MakananTradisionalController::class, 'update']);
Route::get('/lihat/{id}', [MakananTradisionalController::class, 'lihat']);
