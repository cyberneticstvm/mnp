<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
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
    $title = "MNP Rental - Car Rental in Dubai"; $description = "MNP Rental is an economy car rental company in Dubai."; $keywords = "Car Rental, Luxury Cars, Pickups, Hiace rental";
    return view('index', compact('title', 'description', 'keywords'));
});
Route::get('/about', function () {
    $title = "MNP Rental - About"; $description = "MNP Rental is an economy car rental company in Dubai."; $keywords = "Car Rental, Luxury Cars, Pickups, Hiace rental";
    return view('about', compact('title', 'description', 'keywords'));
});
Route::get('/service', function () {
    $title = "MNP Rental - Our Services"; $description = "MNP Rental is an economy car rental company in Dubai."; $keywords = "Car Rental, Luxury Cars, Pickups, Hiace rental";
    return view('services', compact('title', 'description', 'keywords'));
});
Route::get('/contact', function () {
    $title = "MNP Rental - Contact Us"; $description = "MNP Rental is an economy car rental company in Dubai."; $keywords = "Car Rental, Luxury Cars, Pickups, Hiace rental";
    return view('contact', compact('title', 'description', 'keywords'));
});

Route::post('/', [EmailController::class, 'contactemail'])->name('contact.submit');
Route::get('/callback', [EmailController::class, 'callback'])->name('callback.submit');

Route::get('/message', function () {
    $title = "MNP Rental - Thank You"; $description = ""; $keywords = "";
    return view('message', compact('title', 'description', 'keywords'));
})->name('message');

Route::get('/sitemap.xml', [EmailController::class, 'sitemap']);
Route::get('/robots.txt', [EmailController::class, 'robots']);