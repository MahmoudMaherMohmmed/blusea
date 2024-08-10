<?php

use App\Http\Controllers\Front\HomeController;
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

    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('about', [HomeController::class, 'about'])->name('about');
    Route::get('blogs', [HomeController::class, 'blogs'])->name('blogs');
    Route::get('blog/{slug}', [HomeController::class, 'blogDetails'])->name('blog.details');
    Route::get('contact', [HomeController::class, 'contact'])->name('contact');
    Route::post('contact/save_message', [HomeController::class, 'saveContactMessage'])->name('contact.save_message');
    Route::post('subscribe', [HomeController::class, 'subscribe'])->name('subscribe');
});
