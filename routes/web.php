<?php

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
        Route::GET('/upload-kuisoner/edit/{id}', [KuisonerController::class, 'editProfil'])->name('kuisoner.edit');
        Route::PUT('/upload-kuisoner/update/{id}', [KuisonerController::class, 'updateProfil'])->name('kuisoner.update');

    });
    Route::prefix('bukti-upload')->group(function () {
        Route::GET('/bukti-upload', [UserController::class, 'index'])->name('bukti.index');
        Route::GET('/bukti-upload/edit/{id}', [UserController::class, 'editProfil'])->name('bukti.edit');
        Route::PUT('/bukti-upload/update/{id}', [UserController::class, 'updateProfil'])->name('bukti.update');

    });
});
