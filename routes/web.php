<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndonesiaController;

Route::get('/', function () {
    return view('home');
});

Route::get('/countries/indonesia', [IndonesiaController::class, 'show'])->name('countries.indonesia');
Route::get('/countries/indonesia/regions/{region}', [IndonesiaController::class, 'region'])->name('regions.show');
Route::get('/countries/indonesia/cities/{city}', [IndonesiaController::class, 'city'])->name('cities.show');

Route::get('/cities/{city}/costumes', [IndonesiaController::class, 'cityCostumes'])->name('cities.costumes');
Route::get('/cities/{city}/attractions', [IndonesiaController::class, 'cityAttractions'])->name('cities.attractions');
Route::get('/cities/{city}/culinary', [IndonesiaController::class, 'cityCulinary'])->name('cities.culinary');