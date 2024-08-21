<?php

use App\Http\Controllers\Dashboard\BlogController;
use App\Http\Controllers\Dashboard\BranchController;
use App\Http\Controllers\Dashboard\BrandController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\ContactController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\PartnerController;
use App\Http\Controllers\Dashboard\ServiceController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\SliderController;
use App\Http\Controllers\Dashboard\SubscribeController;
use App\Http\Controllers\Dashboard\UserController;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register dashboard routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['auth', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/home', [HomeController::class, 'home'])->name('home');
        Route::resource('users', UserController::class);
        Route::resource('brands', BrandController::class);
        Route::resource('categories', CategoryController::class);
        Route::resource('sliders', SliderController::class);
        Route::resource('blogs', BlogController::class);
        Route::resource('partners', PartnerController::class);
        Route::resource('services', ServiceController::class);
        Route::resource('contacts', ContactController::class)->only(['index', 'show']);
        Route::resource('subscribes', SubscribeController::class)->only(['index']);
        Route::resource('branches', BranchController::class);
        Route::resource('settings', SettingController::class);
    });
});
