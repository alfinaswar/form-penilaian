<?php

use App\Http\Controllers\BalasanKuisonerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KuisonerController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider and all of them will
 * | be assigned to the "web" middleware group. Make something great!
 * |
 */

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home/kuisoner', [HomeController::class, 'kuisoner'])->name('home.kuisoner');

Route::POST('/register-sekolah', [UserController::class, 'Register'])->name('users.register');
Route::get('/register-penilai', [UserController::class, 'RegisterPenilai'])->name('users.register-penilai');
Route::POST('/store-penilai', [UserController::class, 'StorePenilai'])->name('users.store-penilai');
Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    Route::get('/petunjuk-penggunaan-aplikasi', [HomeController::class, 'Guide'])->name('guide.index');
    Route::prefix('profil')->group(function () {
        Route::GET('/identitas', [UserController::class, 'profil'])->name('profil.index');
        Route::GET('/identitas/edit/{id}', [UserController::class, 'editProfil'])->name('profil.edit');
        Route::PUT('/identitas/update/{id}', [UserController::class, 'updateProfil'])->name('profil.update');
    });
    Route::prefix('kuisoner')->group(function () {
        Route::GET('/upload-kuisoner', [KuisonerController::class, 'index'])->name('kuisoner.index');
        Route::GET('/isi/{id}', [KuisonerController::class, 'create'])->name('kuisoner.create');
        Route::GET('/upload-kuisoner/isi', [KuisonerController::class, 'isi'])->name('kuisoner.isi');
        Route::POST('/upload-kuisoner/store', [KuisonerController::class, 'store'])->name('kuisoner.store');
        Route::DELETE('/upload-kuisoner/destroy/{id}', [KuisonerController::class, 'destroy'])->name('kuisoner.destroy');
        Route::GET('/upload-kuisoner/edit/{id}', [KuisonerController::class, 'edit'])->name('kuisoner.edit');
        Route::PUT('/upload-kuisoner/update/{id}', [KuisonerController::class, 'updateProfil'])->name('kuisoner.update');
    });
    Route::prefix('nilai')->group(function () {
        Route::get('/', [NilaiController::class, 'index'])->name('nilai.index');
        Route::get('/create', [NilaiController::class, 'create'])->name('nilai.create');
        Route::post('/store', [NilaiController::class, 'store'])->name('nilai.store');
        Route::get('/cetak-pdf/{id}', [NilaiController::class, 'CetakPdf'])->name('nilai.cetak_pdf');
        Route::put('/update/{id}', [NilaiController::class, 'update'])->name('nilai.update');
        Route::delete('/destroy/{id}', [NilaiController::class, 'destroy'])->name('nilai.destroy');
        Route::get('/show/{id}', [NilaiController::class, 'show'])->name('nilai.show');
    });
});
