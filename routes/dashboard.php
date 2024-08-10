<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/home', [App\Http\Controllers\Dashboard\HomeController::class, 'home'])->name('home');
        Route::resource('users', App\Http\Controllers\Dashboard\UserController::class);

        Route::resource('services', App\Http\Controllers\Dashboard\ServiceController::class);
        Route::resource('sliders', App\Http\Controllers\Dashboard\SliderController::class);
        Route::resource('blogs', App\Http\Controllers\Dashboard\BlogController::class);
        Route::resource('partners', App\Http\Controllers\Dashboard\PartnerController::class);
        Route::resource('branches', App\Http\Controllers\Dashboard\BranchController::class);
        Route::resource('settings', App\Http\Controllers\Dashboard\SettingController::class);
        Route::resource('contacts', App\Http\Controllers\Dashboard\ContactController::class)->only(['index', 'show']);
        Route::resource('subscribes', App\Http\Controllers\Dashboard\SubscribeController::class)->only(['index']);
    });
});
