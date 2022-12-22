<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\blogcontroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\UtsController;
use Illuminate\Support\Facades\Route;

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
//Pelajaran pertemuan 5
// syntax : php artisan make:controller namactrl -r
//php artisan make:migration table_mahasiswa /untuk migrasi table ke coding folder database
//php artisan migrate /untuk migrasi ke database
//php artisan make:seeder mahasiswa //ntahlah untuk apa intinya begitulah nanti ada muncul folder seeder di database
//php artisan migrate --seed //supaya apa, supaya biar tabelnya keisi
//php artisan make:model mahasiswa_model



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'index'])->name('about');
Route::get('/mahasiswa', [mahasiswaController::class,'index'])->name('mahasiswa');
Route::get('/mahasiswa/{id}/edit', [mahasiswaController::class,'edit'])->name('mahasiswa.edit');
Route::get('/mahasiswa/{id}/delete', [mahasiswaController::class,'destroy'])->name('mahasiswa.delete');

Route::get('/kelas', [KelasController::class,'index'])->name('kelas');
Route::get('/kelas/{id}/edit', [KelasController::class,'index'])->name('kelas.edit');
Route::get('/kelas/{id}/delete', [KelasController::class,'index'])->name('kelas.delete');

Route::resource('blog', blogcontroller::class);
// Route::resource('mid', UtsController::class);
Route::get('/mid/tampil', [UtsController::class,'index'])->name('mid.index');
Route::get('/mid/tambah', [UtsController::class,'create'])->name('mid.create');
Route::any('/mid/{id}/edit', [UtsController::class,'edit'])->name('mid.edit');
Route::any('/mid/{id}/update', [UtsController::class,'update'])->name('mid.update');
Route::post('/mid/simpan', [UtsController::class,'store'])->name('mid.store');
Route::any('/mid/{id}/delete', [UtsController::class,'destroy'])->name('mid.destroy');

