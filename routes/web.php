<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndonesiaController;
use App\Http\Controllers\MalaysiaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman Utama
Route::get('/', function () {
    return view('home');
})->name('home');

// ==========================================
// ROUTES INDONESIA
// ==========================================
Route::prefix('countries/indonesia')->group(function () {
    Route::get('/', [IndonesiaController::class, 'show'])->name('countries.indonesia');
    Route::get('/regions/{region}', [IndonesiaController::class, 'region'])->name('regions.show');
    Route::get('/cities/{city}', [IndonesiaController::class, 'city'])->name('cities.show');
});

// Detail Komponen Kota Indonesia
Route::prefix('cities/{city}')->group(function () {
    Route::get('/costumes', [IndonesiaController::class, 'cityCostumes'])->name('cities.costumes');
    Route::get('/attractions', [IndonesiaController::class, 'cityAttractions'])->name('cities.attractions');
    Route::get('/culinary', [IndonesiaController::class, 'cityCulinary'])->name('cities.culinary');
});

// ==========================================
// ROUTES MALAYSIA
// ==========================================
Route::prefix('countries/malaysia')->as('malaysia.')->group(function () {
    // 1. Halaman Utama Malaysia -> route('malaysia.index')
    Route::get('/', [MalaysiaController::class, 'index'])->name('index');

    // 2. Halaman Daftar Kota per Wilayah / Negeri -> route('malaysia.region.show')
    Route::get('/regions/{slug}', [MalaysiaController::class, 'showRegion'])->name('region.show');

    // 3. Halaman Detail Kota & Komponen Khas
    Route::prefix('cities/{slug}')->group(function () {
        // Halaman Detail Kota -> route('malaysia.cities.show')
        Route::get('/', [MalaysiaController::class, 'showCity'])->name('cities.show');
        
        // Sub-halaman Komponen Khas
        Route::get('/costumes', [MalaysiaController::class, 'cityCostumes'])->name('cities.costumes');
        Route::get('/attractions', [MalaysiaController::class, 'cityAttractions'])->name('cities.attractions');
        Route::get('/culinary', [MalaysiaController::class, 'cityCulinary'])->name('cities.culinary');
    });
});