<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Auth::routes();
Route::middleware(['auth'])->group(function () {
    // Ini Admin Bro
    Route::group(['middleware' => 'role', 'prefix' => 'admin'], function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin');
        Route::get('/manageadmin', [AdminController::class, 'manageadmin'])->name('manageadmin');
        Route::get('/managepengusaha', [AdminController::class, 'managepengusaha'])->name('managepengusaha');
        Route::get('/managepelanggan', [AdminController::class, 'managepelanggan'])->name('managepelanggan');
        Route::get('/managehotel', [AdminController::class, 'managehotel'])->name('managehotel');

        // Admin Profil
        Route::group(['prefix' => 'profil'], function () {
            Route::get('/', [AdminController::class, 'adminprofil'])->name('adminprofil');
        });
    });
});
?>

<!-- ============== Aplikasi Penginapan Uwu ============== -->