<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\mahasiswaController;
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
