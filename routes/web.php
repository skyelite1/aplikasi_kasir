<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JenisBarangController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DiskonController;
use App\Http\Controllers\TransaksiController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::middleware(['guest'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('login');
    Route::post('/', [HomeController::class, 'login']);
});

Route::get('/home', function () {
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [HomeController::class, 'admin']);
    Route::get('/kasir', [HomeController::class, 'kasir']);
    Route::get('/logout', [HomeController::class, 'logout']);

    // CRUD Data User
    Route::get('/admin/user', [UserController::class, 'index']);
    Route::post('/admin/user/store', [UserController::class, 'store']);
    Route::post('/admin/user/update/{id}', [UserController::class, 'update']);
    Route::post('/admin/user/destroy/{id}', [UserController::class, 'destroy']);

    // CRUD Data Jenis Barang
    Route::get('/admin/jenisbarang', [JenisBarangController::class, 'index']);
    Route::post('/admin/jenisbarang/store', [JenisBarangController::class, 'store']);
    Route::post('/admin/jenisbarang/update/{id}', [JenisBarangController::class, 'update']);
    Route::post('/admin/jenisbarang/destroy/{id}', [JenisBarangController::class, 'destroy']);

    // CRUD Data Barang
    Route::get('/admin/barang', [BarangController::class, 'index']);
    Route::post('/admin/barang/store', [BarangController::class, 'store']);
    Route::post('/admin/barang/update/{id}', [BarangController::class, 'update']);
    Route::post('/admin/barang/destroy/{id}', [BarangController::class, 'destroy']);

    // Setting Diskon
    Route::get('/admin/setdiskon', [DiskonController::class, 'index']);
    Route::post('/admin/setdiskon/update/{id}', [DiskonController::class, 'update']);

    // Setting profile
    Route::get('/admin/profile', [UserController::class, 'profile']);
    Route::get('/kasir/profile', [UserController::class, 'profileKasir']);
    Route::post('/profile/update/{id}', [UserController::class, 'updateprofile']);

    // Setting profile
    Route::get('/transaksi', [TransaksiController::class, 'index']);
    Route::get('/transaksi/create', [TransaksiController::class, 'create']);
    Route::post('/transaksi/store', [TransaksiController::class, 'store']);
    Route::delete('/transaksi/destroy/{id}', [TransaksiController::class, 'destroy']);

});

