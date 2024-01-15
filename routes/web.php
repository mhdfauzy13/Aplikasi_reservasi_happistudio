<?php

use App\Http\Controllers\Admin\DaftarreservasiController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\ManagementCustomerController;
use App\Http\Controllers\Admin\ManagementPricelistController;
use App\Http\Controllers\Customer\SingleSelfPhotoController;
use App\Http\Controllers\Customer\BookingController;
use App\Http\Controllers\ProfileController;
use App\Models\Paket;
use App\Http\Controllers\Customer\booking_detailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customer\PricelistController;
use App\Http\Controllers\HomeController;

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

Route::get('/pricelist', [PricelistController::class, 'pricelist'])->name('pricelist');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

route::get('/home',[HomeController::class,'login']);

// Route::middleware(['auth', 'verified'])->group(function () {
//      // Rute untuk admin
//     Route::middleware('checkrole:admin')->group(function () {
//         Route::get('/dashboard', [DashboardAdminController::class, 'index'])->name('dashboard.index');
//     });

//     // Rute untuk customer
//     Route::middleware('checkrole:customer')->group(function () {
//         Route::get('/pricelist', [PricelistController::class, 'Pricelist'])->name('pricelist');
//     });
// });

Route::middleware('auth')->group(function () {

    Route::middleware('checkrole:admin')->group(function () {
        Route::get('/admin', function () {
            return view('admin.admin');
        });
        Route::get('/admin/data-customer', [ManagementCustomerController::class, 'index'])->name('data-customer.index');
        // Route::get('/admin/data-pricelist', [ManagementPricelistController::class, 'index'])->name('data-pricelist.index');
        Route::get('/admin/daftar-reservasi', [DaftarreservasiController::class, 'index'])->name('daftar-reservasi.index');
        Route::get('/admin/dashboard', [DashboardAdminController::class, 'index'])->name('dashboard.index');
        // Route::resource('/pricelists', \App\Http\Controllers\Admin\PostPrecelistController::class)->middleware('admin');

        Route::resource('/pakets', \App\Http\Controllers\Admin\PaketController::class);



    });

    Route::middleware('checkrole:customer')->group(function () {
    Route::get('/single-self-photo/{id}/create', [SingleSelfPhotoController::class, 'createBooking'])->name('singleSelfPhoto.createbooking');
    // Route::post('/single-self-photo/create', [BookingController::class, 'store'])->name('booking.store');
    Route::get('/booking/{id}', [booking_detailController::class, 'show'])->name('booking_detail');;
    Route::resource('/bookings', \App\Http\Controllers\Customer\BookingController::class);


    });
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


});

route::get('invoice/{id}',[BookingController::class,'invoice']);

require __DIR__.'/auth.php';
