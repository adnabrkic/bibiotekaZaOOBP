<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KnjigeController;
use App\Http\Controllers\JezikController;
use App\Http\Controllers\KategorijaController;
use App\Http\Controllers\PolicaController;
use App\Http\Controllers\IzdavacController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\PosudbaController;
use App\Http\Controllers\KnjigeFileController;


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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('', function () {
        return view('');
    })->name('');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/', function() {
    return view('dashboard');
})->name('dashboard');

/*Route::middleware(['auth:sanctum', 'verified'])->get('/knjige', function() {
    return view('knjige.index');
})->name('knjige'); */

Route::middleware(['auth:sanctum', 'verified'])->get('knjige', [KnjigeController::class, 'index'])->name('knjige');

Route::middleware(['auth:sanctum', 'verified'])->get('dodaj_knjige', [KnjigeController::class, 'create'])->name('dodaj_knjige');
Route::middleware(['auth:sanctum', 'verified'])->post('spremi_knjige', [KnjigeController::class, 'store'])->name('spremi_knjige');

Route::middleware(['auth:sanctum', 'verified'])->get('jezik', [JezikController::class, 'index'])->name('jezik');
Route::middleware(['auth:sanctum', 'verified'])->get('kategorija', [KategorijaController::class, 'index'])->name('kategorija');
Route::middleware(['auth:sanctum', 'verified'])->get('polica', [PolicaController::class, 'index'])->name('polica');
Route::middleware(['auth:sanctum', 'verified'])->get('izdavac', [IzdavacController::class, 'index'])->name('izdavac');
Route::middleware(['auth:sanctum', 'verified'])->get('autor', [AutorController::class, 'index'])->name('autor');
Route::middleware(['auth:sanctum', 'verified'])->get('posudbe', [PosudbaController::class, 'index'])->name('posudbe');

Route::middleware(['auth:sanctum', 'verified'])->post('obrisi_knjige', [KnjigeController::class, 'delete'])->name('obrisi_knjige');
Route::middleware(['auth:sanctum', 'verified'])->post('uredi_knjige', [KnjigeController::class, 'edit'])->name('uredi_knjige');
Route::middleware(['auth:sanctum', 'verified'])->post('update_knjige', [KnjigeController::class, 'update'])->name('update_knjige');



Route::middleware(['auth:sanctum', 'verified'])->post('file_add', [KnjigeController::class, 'file_add'])->name('file_add');
Route::middleware(['auth:sanctum', 'verified'])->post('process', [KnjigeController::class, 'process'])->name('process');