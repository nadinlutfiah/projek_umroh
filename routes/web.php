<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaUmrohController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\DoaController;
use App\Http\Controllers\DoaUmrohController;
use App\Http\Controllers\TugasPersiapanUmrohController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('agendaUmroh', AgendaUmrohController::class);
Route::get('agendaUmroh.index', [AgendaUmrohController::class, 'index'])->name('agendaUmroh.index'); // Menampilkan daftar agenda
Route::get('agendaumroh/create', [AgendaUmrohController::class, 'create'])->name('agenda_umroh.create'); // Menampilkan formulir untuk membuat agenda baru
Route::post('agendaumroh', [AgendaUmrohController::class, 'store'])->name('agenda_umroh.store'); // Menyimpan agenda baru
Route::get('agendaumroh/{id}', [AgendaUmrohController::class, 'show'])->name('agenda_umroh.show'); // Menampilkan detail agenda
Route::get('agendaumroh/{id}/edit', [AgendaUmrohController::class, 'edit'])->name('agenda_umroh.edit'); // Menampilkan formulir untuk mengedit agenda
Route::put('agendaumroh/{id}', [AgendaUmrohController::class, 'update'])->name('agenda_umroh.update'); // Memperbarui agenda
Route::delete('agendaumroh/{id}', [AgendaUmrohController::class, 'destroy'])->name('agenda_umroh.destroy'); // Menghapus agenda


Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda');
Route::get('/agenda/create', [AgendaController::class, 'create'])->name('agenda.create');
Route::post('/agenda', [AgendaController::class, 'store'])->name('agenda.store');
Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda.index');
Route::get('/agenda/{id}/edit', [AgendaController::class, 'edit'])->name('agenda.edit');
Route::get('/agenda/{agenda}', [AgendaController::class, 'show'])->name('agenda.show');

Route::delete('/agenda/{id}', [AgendaController::class, 'destroy'])->name('agenda.destroy');


Route::get('/doas', [DoaController::class, 'index'])->name('doas');
Route::get('/doas/create', [DoaController::class, 'create'])->name('doas.create');
Route::post('/doas', [DoaController::class, 'store'])->name('doas.store');


Route::get('/doaumroh', [DoaUmrohController::class, 'index'])->name('doaumroh');
Route::get('/doaumroh/create', [DoaUmrohController::class, 'create'])->name('doaumroh.create');
Route::post('/doaumroh', [DoaUmrohController::class, 'store'])->name('doaumroh.store');
Route::get('/doaumroh', [DoaUmrohController::class, 'index'])->name('doaumroh.index');
Route::get('/doaumroh/{id}/edit', [DoaUmrohController::class, 'edit'])->name('doaumroh.edit');
Route::delete('/doaumroh/{doaumroh}', [DoaUmrohController::class, 'destroy'])->name('doaumroh.destroy');
Route::put('doaumroh/{id}', [DoaUmrohController::class, 'update'])->name('doaumroh.update');


Route::get('/tugas', [TugasPersiapanUmrohController::class, 'index'])->name('tugas');
Route::get('/tugas', [TugasPersiapanUmrohController::class, 'index'])->name('tugas_persiapan_umroh.index');
Route::get('/tugas_persiapan_umroh/create', [TugasPersiapanUmrohController::class, 'create'])->name('tugas_persiapan_umroh.create');
Route::post('/tugas', [TugasPersiapanUmrohController::class, 'store'])->name('tugas_persiapan_umroh.store');
Route::get('/tugas/{id}/edit', [TugasPersiapanUmrohController::class, 'edit'])->name('tugas_persiapan_umroh.edit');
Route::delete('/tugas/{tugas}', [TugasPersiapanUmrohController::class, 'destroy'])->name('tugas_persiapan_umroh.destroy');
Route::put('tugas/{id}', [TugasPersiapanUmrohController::class, 'update'])->name('tugas_persiapan_umroh.update');