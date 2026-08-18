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

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/paket', [PageController::class, 'packages'])->name('packages');
Route::get('/infrastruktur/colocation', [PageController::class, 'colocation'])->name('colocation');
Route::get('/infrastruktur/coverage', [PageController::class, 'coverage'])->name('coverage');
Route::get('/tentang-kami', [PageController::class, 'about'])->name('about');
Route::get('/sertifikasi-legalitas', [PageController::class, 'certifications'])->name('certifications');
Route::get('/hubungi-kami', [PageController::class, 'contact'])->name('contact');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/speedtest', [PageController::class, 'speedtest'])->name('speedtest');

// Admin Routes
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\CoverageController;
use App\Http\Controllers\CertificationController;
use App\Http\Controllers\SettingController;

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'login']);
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    
    Route::middleware('auth')->group(function () {
        Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        
        Route::resource('packages', PackageController::class);
        Route::resource('faqs', FaqController::class);
        Route::resource('coverages', CoverageController::class);
        Route::resource('certifications', CertificationController::class);
        Route::resource('settings', SettingController::class);
    });
});
