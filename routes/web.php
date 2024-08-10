<?php

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

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {
    Auth::routes([
        'register' => false, // Register Routes...
        'reset' => false, // Reset Password Routes...
        'verify' => false, // Email Verification Routes...
    ]);

    Route::get('/', [App\Http\Controllers\Front\HomeController::class, 'index'])->name('index');
    Route::get('about', [App\Http\Controllers\Front\HomeController::class, 'about'])->name('about');
    Route::get('services', [App\Http\Controllers\Front\HomeController::class, 'services'])->name('services');
    Route::get('blogs', [App\Http\Controllers\Front\HomeController::class, 'blogs'])->name('blogs');
    Route::get('blog/{slug}', [App\Http\Controllers\Front\HomeController::class, 'blogDetails'])->name('blog.details');
    Route::get('contact', [App\Http\Controllers\Front\HomeController::class, 'contact'])->name('contact');
    Route::post('contact/save_message', [App\Http\Controllers\Front\HomeController::class, 'saveContactMessage'])->name('contact.save_message');
    Route::post('subscribe', [App\Http\Controllers\Front\HomeController::class, 'subscribe'])->name('subscribe');
});
