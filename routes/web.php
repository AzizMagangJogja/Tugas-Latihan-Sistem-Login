<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KaprodiController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\RequestController;
use Symfony\Component\Routing\RequestContextAwareInterface;

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

Route::middleware(['guest'])->group(function() {
    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/', [SesiController::class, 'login']);
});

Route::get('/home', function() {
    return redirect('/kaprodi');
});

Route::middleware(['auth'])->group(function() {
    Route::get('/kaprodi', [KaprodiController::class, 'index']);
    Route::get('/kaprodi', [DosenController::class, 'index'])->name('kaprodi.index');
    Route::get('/kaprodi/kaprodi', [KaprodiController::class, 'kaprodi'])->middleware('userAkses:kaprodi');
    Route::get('/kaprodi/dosen_wali', [KaprodiController::class, 'dosen_wali'])->middleware('userAkses:dosen_wali');
    Route::get('/kaprodi/mahasiswa', [KaprodiController::class, 'mahasiswa'])->middleware('userAkses:mahasiswa');
    Route::get('/logout', [SesiController::class, 'logout']);
});

Route::get('/kaprodi/dosen/create', [DosenController::class, 'create'])->name('kaprodi.dosen.create');
Route::post('/kaprodi/dosen/store', [DosenController::class, 'store'])->name('kaprodi.dosen.store');
Route::get('/kaprodi/dosen/{id}/edit', [DosenController::class, 'edit'])->name('kaprodi.dosen.edit');
Route::put('/kaprodi/dosen/{id}', [DosenController::class, 'update'])->name('kaprodi.dosen.update');
Route::delete('/kaprodi/dosen/{id}', [DosenController::class, 'destroy'])->name('kaprodi.dosen.destroy');

Route::get('/kaprodi/kelas/create', [KelasController::class, 'create'])->name('kaprodi.kelas.create');
Route::post('/kaprodi/kelas/store', [KelasController::class, 'store'])->name('kaprodi.kelas.store');
Route::get('/kaprodi/kelas/{id}/edit', [KelasController::class, 'edit'])->name('kaprodi.kelas.edit');
Route::put('/kaprodi/kelas/{id}', [KelasController::class, 'update'])->name('kaprodi.kelas.update');
Route::delete('/kaprodi/kelas/{id}', [KelasController::class, 'destroy'])->name('kaprodi.kelas.destroy');

Route::get('/mahasiswa/request', [RequestController::class, 'create'])->name('mahasiswa.request.store');
Route::post('/mahasiswa/request', [RequestController::class, 'store'])->name('mahasiswa.index'); 
Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::get('/mahasiswa', [RequestController::class, 'balikmahasiswa'])->name('mahasiswa.index');

Route::get('/dosen/request', [RequestController::class, 'index'])->name('dosen.request'); 
Route::post('/dosen/request/{id}/approve', [RequestController::class, 'approve'])->name('dosen.request.approve'); 
Route::post('/dosen/request/{id}/reject', [RequestController::class, 'reject'])->name('dosen.request.reject'); 
Route::get('/dosen_wali', [RequestController::class, 'balikdosen'])->name('dosen.index');

Route::get('/dosen/create', [MahasiswaController::class, 'createMhs'])->name('dosen.create');
Route::post('/dosen/store', [MahasiswaController::class, 'storeMhs'])->name('dosen.store');
Route::get('/dosen/{id}/edit', [MahasiswaController::class, 'editMhs'])->name('dosen.edit');
Route::put('/dosen/{id}', [MahasiswaController::class, 'updateMhs'])->name('dosen.update');
Route::delete('/dosen/{id}', [MahasiswaController::class, 'destroyMhs'])->name('dosen.destroy');