<?php

use App\Http\Controllers\AgendaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoaUmrohController;
use App\Http\Controllers\TugasPersiapanUmrohController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route untuk menampilkan semua agenda
Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda.index');

// Route untuk menyimpan data agenda baru
Route::post('/agenda', [AgendaController::class, 'store'])->name('agenda.store');

// Route untuk menampilkan detail agenda berdasarkan ID
Route::get('/agenda/{id}', [AgendaController::class, 'show'])->name('agenda.show');

// Route untuk memperbarui data agenda berdasarkan ID
Route::put('/agenda/{id}', [AgendaController::class, 'update'])->name('agenda.update');

// Route untuk menghapus data agenda berdasarkan ID
Route::delete('/agenda/{id}', [AgendaController::class, 'destroy'])->name('agenda.destroy');



Route::get('/doaumroh', [DoaUmrohController::class, 'apiIndex']);
Route::get('/doaumroh/{id}', [DoaUmrohController::class, 'apiShow']);
Route::post('/doaumroh', [DoaUmrohController::class, 'apiStore']);
Route::put('/doaumroh/{id}', [DoaUmrohController::class, 'apiUpdate']);
Route::delete('/doaumroh/{id}', [DoaUmrohController::class, 'apiDestroy']);


Route::get('/tugas-persiapan-umroh', [TugasPersiapanUmrohController::class, 'apiIndex']);
Route::post('/tugas-persiapan-umroh', [TugasPersiapanUmrohController::class, 'store']);
Route::put('/tugas-persiapan-umroh/{id}', [TugasPersiapanUmrohController::class, 'update']);
Route::delete('/tugas-persiapan-umroh/{id}', [TugasPersiapanUmrohController::class, 'destroy']);