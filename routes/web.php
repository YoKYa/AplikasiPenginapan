<?php

use App\Http\Middleware\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\IklanController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PengusahaController;
use App\Http\Controllers\HalamanUtamaController;

Route::get('/', [HalamanUtamaController::class, 'halamanutama']);
Route::get('/detailhotel', [HalamanUtamaController::class, 'detailhotel'])->name('detailhotel');
Route::get('pengusaha/login',[PengusahaController::class, 'login']);
Route::get('pengusaha/register',[PengusahaController::class, 'register']);
Route::get('admin/login',[AdminController::class, 'login']);

Auth::routes();
Route::middleware(['auth'])->group(function () {
    // Ini Admin Bro
    Route::group(['middleware' => 'role', 'prefix' => 'admin'], function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin');

        // User
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
            Route::get('/add', [UsersController::class, 'adminadduser'])->name('useradd');
            Route::post('/add', [UsersController::class, 'adminadduserstore'])->name('useraddstore');
            Route::get('/edit/{id}', [UsersController::class, 'adminedituser'])->name('edituser');
            Route::post('/edit', [UsersController::class, 'adminedituserstore'])->name('adminedituserstore');
            Route::post('/updatepass', [UsersController::class, 'adminupdatepass'])->name('updatepassstore');
            Route::get('/delete/{id}', [UsersController::class, 'admindeluser'])->name('deluser');
            Route::post('/delete', [UsersController::class, 'admindeluserstore'])->name('admindelstore');
            Route::get('/{id}', [UsersController::class, 'adminviewuser']);
        });

        // Hotel
        Route::group(['prefix' => 'hotel'], function () {
            Route::get('/', [HotelController::class, 'index'])->name('adminhotel');
            Route::get('/create', [HotelController::class, 'create'])->name('adminhotelcreate');
            Route::post('/create', [HotelController::class, 'storecreate']);
            Route::get('/verify', [HotelController::class, 'verifyhotel'])->name('verifyhotel');
            Route::get('/{id}', [HotelController::class, 'view']);
            Route::post('/verify', [HotelController::class, 'verifyhotelstore'])->name('verifyhotelstore');

        });

        // Lokasi
        Route::group(['prefix' => 'lokasi'], function () {
            Route::get('/', [LokasiController::class, 'index'])->name('adminlokasi');
            Route::get('/provinsi', [LokasiController::class, 'provinsi'])->name('adminlokasiprovinsi');
            Route::get('/kabupaten', [LokasiController::class, 'kabupaten'])->name('adminlokasikabupaten');
            Route::get('/kecamatan', [LokasiController::class, 'kecamatan'])->name('adminlokasikecamatan');
            Route::get('/desa', [LokasiController::class, 'desa'])->name('adminlokasidesa');
            Route::get('/p/{prov}',[LokasiController::class, 'lihatkabupaten']);
            Route::get('/p/{prov}/{kab}',[LokasiController::class, 'lihatkecamatan']);
            Route::get('/p/{prov}/{kab}/{kec}',[LokasiController::class, 'lihatdesa']);
            Route::get('/p/{prov}/{kab}/{kec}/{ds}',[LokasiController::class, 'dedesa']);
            
        });

        // Iklan
        Route::group(['prefix' => 'iklan'], function () {
            Route::get('/', [IklanController::class,'index'])->name('adminiklan');
            Route::get('/add', [IklanController::class,'create'])->name('admincreateiklan');
            Route::post('/add', [IklanController::class,'store']);
            Route::get('/{id}', [IklanController::class,'view']);
            Route::get('/edit/{id}', [IklanController::class,'edit']);
            Route::post('/edit', [IklanController::class,'editstore']);
            Route::post('/delete', [IklanController::class, 'delete'])->name('admindeleteiklan');
        });

        Route::group(['prefix' => 'order'], function () {
            Route::get('/', [OrderController::class, 'index'])->name('adminorder');
            Route::get('/create', [OrderController::class, 'create'])->name('admincreateorder');
        });
    });

    // Ini Pengusaha Bro
    Route::group(['middleware'=>'role', 'prefix' => 'pengusaha'], function () {
           
    });
});
?>

<!-- ============== Aplikasi Penginapan Uwu ============== -->
