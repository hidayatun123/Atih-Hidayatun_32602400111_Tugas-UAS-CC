<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FertilizerController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\MarketplaceController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Buyer
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    Route::get('/buyer/dashboard', function () {
        return view('buyer.dashboard');
    })->name('buyer.dashboard');

    Route::get('/marketplace', [MarketplaceController::class, 'index'])
        ->name('marketplace');

    Route::resource('cart', CartController::class);

    Route::post('/checkout', [OrderController::class, 'checkout'])
        ->name('checkout');

    Route::get('/orders', [OrderController::class, 'index'])
        ->name('orders.index');

    Route::resource('consultations', ConsultationController::class);
    Route::get('/profile', [ProfileController::class, 'index'])
    ->name('profile.index');

    Route::put('/profile',[ProfileController::class,'update'])
        ->name('profile.update');
});

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/dashboard', [DashboardController::class,'index'])
    ->name('dashboard');


    Route::resource('products', ProductController::class);

    Route::resource('fertilizers', FertilizerController::class);

    Route::get('/admin/orders', [AdminOrderController::class, 'index'])
        ->name('admin.orders.index');

    Route::put('/admin/orders/{order}', [AdminOrderController::class, 'update'])
        ->name('admin.orders.update');
});

require __DIR__.'/auth.php';