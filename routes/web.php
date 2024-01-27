<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Frontend\DashboardController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\ProfileController;
use Illuminate\Support\Facades\Route;

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

// show Home Page
Route::get('/', [FrontendController::class, 'index'])->name('home');

// Show Product Details Pagge
Route::get('product/{slug}', [FrontendController::class, 'showProduct'])->name('product.show');

// Show Product modal
Route::get('/load-product-modal/{productId}', [FrontendController::class, 'loadProductModal'])->name('load.Product.Modal');

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::put('profile', [ProfileController::class, 'updateProfile'])->name('profile.update');
    Route::put('profile/password', [ProfileController::class, 'updatePassword'])->name('profile.password.update');
    Route::post('profile/avatar', [ProfileController::class, 'updateAvatar'])->name('profile.avatar.update');
});

require __DIR__.'/auth.php';

// Admin Auth Routes protected with guest middleware to prevent opening two sessions on same browser
Route::group(['middleware' => 'guest'], function(){

Route::get('admin/login', [AdminAuthController::class, 'index'])->name('admin.login');

});
