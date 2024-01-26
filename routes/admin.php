<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductGalleryController;
use App\Http\Controllers\Admin\ProductOptionController;
use App\Http\Controllers\Admin\ProductSizeController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\WhyChooseUsController;
use App\Models\Setting;
use Illuminate\Support\Facades\Route;



Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){


    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('index');

    // Profile Routes
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('profile', [ProfileController::class, 'updateProfile'])->name('profile.update');
    Route::put('profile/password', [ProfileController::class, 'updatePassword'])->name('profile.password.update');

    // Slider Routes
    Route::resource('slider', SliderController::class);

    //why choose us routes
    Route::put('why-choose-us-update-title', [WhyChooseUsController::class, 'updateTitle'])->name('why-choose-us-title.update');
    Route::resource('why-choose-us', WhyChooseUsController::class);

    //Categories Routes
    Route::resource('category', CategoryController::class);

    //Products Routes
    Route::resource('product', ProductController::class);

    //Product Gallery Routes
    Route::get('product-gallery/{product}', [ProductGalleryController::class, 'index'])->name('product-gallery.show-index');
    Route::resource('product-gallery', ProductGalleryController::class);

    //Product Size Routes
    Route::get('product-size/{product}', [ProductSizeController::class, 'index'])->name('product-size.show-index');
    Route::resource('product-size', ProductSizeController::class);

    //Product Option Routes
    Route::resource('product-option', ProductOptionController::class);

    //Settings Routes
    Route::put('settings-general', [SettingController::class, 'UpdateGeneralSettings'])->name('general-settings.update');
    Route::resource('settings', SettingController::class);


});
