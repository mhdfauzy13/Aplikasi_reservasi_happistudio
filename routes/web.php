<?php

use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\ManagementCustomerController;
use App\Http\Controllers\Admin\ManagementPricelistController;
use App\Http\Controllers\Customer\SingleSelfPhotoController;
use App\Http\Controllers\Customer\DoubleSelfPhoto;
use App\Http\Controllers\Customer\GroupSelfPhotoController;
use App\Http\Controllers\Customer\BookingController;
use App\Http\Controllers\ProfileController;
use App\Models\Paket;
use App\Models\SingleSelfPhoto;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PricelistController;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
     // Rute untuk admin
    Route::middleware('checkrole:admin')->group(function () {
        Route::get('/dashboard', [DashboardAdminController::class, 'index'])->name('dashboard.index');
    });

    // Rute untuk customer
    Route::middleware('checkrole:user')->group(function () {
        Route::get('/pricelist', [PricelistController::class, 'showPricelist'])->name('pricelist');
    });
});

Route::middleware('auth')->group(function () {

    Route::middleware('checkrole:admin')->group(function () {
        Route::get('/admin', function () {
            return view('admin.admin');
        });
        Route::get('/admin/data-customer', [ManagementCustomerController::class, 'index'])->name('data-customer.index');
        Route::get('/admin/data-pricelist', [ManagementPricelistController::class, 'index'])->name('data-pricelist.index');
        Route::get('/admin/dashboard', [DashboardAdminController::class, 'index'])->name('dashboard.index');
        // Route::resource('/pricelists', \App\Http\Controllers\Admin\PostPrecelistController::class)->middleware('admin');

        Route::resource('/pakets', \App\Http\Controllers\Admin\PaketController::class);



    });
    Route::middleware('checkrole:customer')->group(function () {
    Route::get('/single-self-photo/create', [SingleSelfPhotoController::class, 'createBooking'])->name('singleSelfPhoto.createbooking');
    // Route::get('/double-self-photo/create', [DoubleSelfPhoto::class, 'createBooking'])->name('DoubleSelfPhoto.createbooking');

    // Route::get('/group-self-photo/create', [GroupSelfPhotoController::class, 'createBooking'])->name('groupSelfPhoto.createbooking');
    Route::post('/single-self-photo/create', [BookingController::class, 'store'])->name('store.booking');
    Route::get('/pricelist', [PricelistController::class, 'showPricelist'])->middleware('auth');

    });
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


});




// Route::get('/pricelist', function () {
//     $paket = Paket::all();
//     return view('pricelist', compact('paket'));
// });

// Route::get('/form-booking', function () {
//     return view('form_booking');
// });


require __DIR__.'/auth.php';
