<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProfilController;

Route::get('/', [HomeController::class, 'index']);

Auth::routes();
Route::middleware(['auth'])->group(function () {
    // Ini Admin Bro
    Route::group(['middleware' => 'role', 'prefix' => 'admin'], function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin');
        Route::group(['prefix' => 'user'], function () {
            Route::get('/admin', [UsersController::class, 'adminuseradmin'])->name('manageadmin');
            Route::get('/pengusaha', [UsersController::class, 'adminuserpengusaha'])->name('managepengusaha');
            Route::get('/pelanggan', [UsersController::class, 'adminuserpelanggan'])->name('managepelanggan');    
        });
        
        // Admin Profil
        Route::group(['prefix' => 'profil'], function () {
            Route::get('/', [ProfilController::class, 'adminprofil'])->name('adminprofil');
            Route::get('/edit', [ProfilController::class, 'admineditprofil'])->name('editadminprofil');
            Route::post('/store', [ProfilController::class, 'admineditprofilstore'])->name('editadminprofilstore');
            Route::post('/updatepass', [ProfilController::class, 'adminupdatepass'])->name('updatepass');
        });
        
        // User
        Route::group(['prefix' => 'user'], function () {
            Route::get('/add',[UsersController::class, 'adminadduser'])->name('useradd');
            Route::post('/add',[UsersController::class, 'adminadduserstore'])->name('useraddstore');
            Route::get('/edit/{id}', [UsersController::class, 'adminedituser'])->name('edituser');
            Route::post('/edit', [UsersController::class, 'adminedituserstore'])->name('adminedituserstore');
            Route::post('/updatepass', [UsersController::class, 'adminupdatepass'])->name('updatepassstore');
            Route::get('/delete/{id}', [UsersController::class, 'admindeluser'])->name('deluser');    
            Route::post('/delete', [UsersController::class, 'admindeluserstore'])->name('admindelstore');
            Route::get('/{id}',[UsersController::class, 'adminviewuser']);
        });

        // Hotel
        Route::group(['prefix' => 'hotel'], function () {
            Route::get('/', [HotelController::class, 'adminhotel'])->name('managehotel');
        });
        

        
    });
});
?>

<!-- ============== Aplikasi Penginapan Uwu ============== -->