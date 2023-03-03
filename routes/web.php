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

Route::get('/', function () {
    $title = "MNP Rental - Car Rental in Dubai"; $description = ""; $keywords = "";
    return view('index', compact('title', 'description', 'keywords'));
});
Route::get('/about', function () {
    $title = "MNP Rental - About"; $description = ""; $keywords = "";
    return view('about', compact('title', 'description', 'keywords'));
});
Route::get('/service', function () {
    $title = "MNP Rental - Our Services"; $description = ""; $keywords = "";
    return view('services', compact('title', 'description', 'keywords'));
});
Route::get('/contact', function () {
    $title = "MNP Rental - Contact Us"; $description = ""; $keywords = "";
    return view('contact', compact('title', 'description', 'keywords'));
});
