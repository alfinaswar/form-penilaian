<?php

use App\Http\Controllers\BalasanKuisonerController;
use App\Http\Controllers\KuisonerController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);

    Route::prefix('profil')->group(function () {
        Route::GET('/identitas', [UserController::class, 'profil'])->name('profil.index');
        Route::GET('/identitas/edit/{id}', [UserController::class, 'editProfil'])->name('profil.edit');
        Route::PUT('/identitas/update/{id}', [UserController::class, 'updateProfil'])->name('profil.update');

    });
    Route::prefix('upload-kuisoner')->group(function () {
        Route::GET('/upload-kuisoner', [KuisonerController::class, 'index'])->name('kuisoner.index');
        Route::GET('/upload-kuisoner/create', [KuisonerController::class, 'create'])->name('kuisoner.create');
        Route::GET('/upload-kuisoner/isi', [KuisonerController::class, 'isi'])->name('kuisoner.isi');
        Route::POST('/upload-kuisoner/store', [KuisonerController::class, 'store'])->name('kuisoner.store');
        Route::DELETE('/upload-kuisoner/destroy/{id}', [KuisonerController::class, 'destroy'])->name('kuisoner.destroy');
        Route::GET('/upload-kuisoner/edit/{id}', [KuisonerController::class, 'edit'])->name('kuisoner.edit');
        Route::PUT('/upload-kuisoner/update/{id}', [KuisonerController::class, 'updateProfil'])->name('kuisoner.update');

    });
    Route::prefix('isi-kuisoner')->group(function () {
        Route::GET('/isi-kuisoner', [BalasanKuisonerController::class, 'index'])->name('isi.index');
        Route::GET('/isi-kuisoner/create/{id}', [BalasanKuisonerController::class, 'create'])->name('isi.create');
        Route::GET('/upload-kuisoner/isi', [BalasanKuisonerController::class, 'isi'])->name('isi.isi');
        Route::POST('/isi-kuisoner/store', [BalasanKuisonerController::class, 'store'])->name('isi.store');
        Route::DELETE('/isi-kuisoner/destroy/{id}', [BalasanKuisonerController::class, 'destroy'])->name('isi.destroy');
        Route::GET('/isi-kuisoner/edit/{id}', [BalasanKuisonerController::class, 'edit'])->name('isi.edit');
        Route::GET('/isi-kuisoner/show/{id}', [BalasanKuisonerController::class, 'show'])->name('isi.show');

        Route::PUT('/isi-kuisoner/update/{id}', [BalasanKuisonerController::class, 'updateProfil'])->name('isi.update');

    });
    Route::prefix('bukti-upload')->group(function () {
        Route::GET('/bukti-upload', [UserController::class, 'index'])->name('bukti.index');
        Route::GET('/bukti-upload/edit/{id}', [UserController::class, 'editProfil'])->name('bukti.edit');
        Route::PUT('/bukti-upload/update/{id}', [UserController::class, 'updateProfil'])->name('bukti.update');

    });
});
