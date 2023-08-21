<?php

use App\Http\Controllers\Admin\BankController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Admin\TransaksiAdmController;
use App\Http\Controllers\Admin\DashboardController;
use App\Models\Bank;
use Illuminate\Auth\Events\Login;

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

    Route::get('/', [HomeController::class, 'index'])->name('homepage');
    Route::get('contact', [HomeController::class, 'contact'])->name('contact.index');
    Route::get('detail/{id}', [HomeController::class, 'detail'])->name('detail');
    Route::get('listing', [HomeController::class, 'listing'])->name('listing');


    Route::middleware(['auth'])->group(function () {

    //sewa pelanggan
    Route::get('sewa/{id}', [HomeController::class, 'sewa'])->name('sewa');
    //transaksi pelanggan
    Route::get('transaksi', [TransaksiController::class, 'index'])->name('frontend.transaksi');
    Route::post('transaksi', [TransaksiController::class, 'store'])->name('transaksi.store');
    Route::get('transaksi/{id}', [TransaksiController::class, 'show'])->name('transaksi.show');
    Route::put('transaksi/{id}', [TransaksiController::class, 'edit'])->name('transaksi.bayar');
    Route::delete('transaksi/destroy/{id}', [TransaksiController::class, 'destroy'])->name('transaksi.destroy');
    Route::put('transaksi/{id}/confirmation', [TransaksiAdmController::class, 'confirmation'])->name('transaksi.confirmation');
});

//Logout
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
Auth::routes();

Route::get('/homepage', [HomeController::class, 'index'])->name('homepage');

Route::middleware(['admin:1'])->group(function () {
    // Route::get('admin', function (){
    //     return ('login');
    // });
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    //costumer
    Route::get('/admin/customer', [CustomerController::class, 'index'])->name('costumer.index');
    Route::get('/admin/customer/{id}', [CustomerController::class, 'show'])->name('costumer.show');
    Route::delete('/admin/customer/{id}', [CustomerController::class, 'delete'])->name('costumer.destroy');
    Route::get('costumer/report', [HomeController::class, 'costumer'])->name('report.costumers');

    //car
    Route::get('/admin/cars', [CarController::class, 'index'])->name('admin.cars.index');
    Route::resource('cars', CarController::class,);
    Route::put('cars/update-image/{id}', [CarController::class, 'updateImage'])->name('cars.updateImage');
    Route::get('/admin/cars/laporan', [CarController::class, 'laporan'])->name('admin.cars.laporancars');
    Route::delete('/cars/{id}', [CarController::class, 'destroy']);


    //transksi
    Route::get('/admin/transaksi', [TransaksiAdmController::class, 'index'])->name('admin.transaksi.index');
    Route::get('/admin/transaksi/{id}', [TransaksiAdmController::class, 'end'])->name('admin.transaksi.selesai');
    Route::put('/admin/transaksi/{id}/reject', [TransaksiAdmController::class, 'reject'])->name('admin.transaksi.reject');
    Route::get('transaction/report', [HomeController::class, 'transaction'])->name('report.Transaction');

    //bank
    Route::get('/admin/bank', [BankController::class,'index' ])->name('admin.bank');
    Route::get('/admin/bank/create', [BankController::class,'create' ])->name('bank.create');
    Route::post('/admin/bank/store',[BankController::class,'store'])->name('bank.store');
    Route::get('/admin/bank/edit/{id}',[BankController::class,'edit'])->name('bank.edit');


    Route::put('/admin/bank/update/{id}', [BankController::class, 'update'])->name('bank.update');
    Route::delete('/admin/bank/{id}', [BankController::class, 'destroy'])->name('bank.destroy');




});
