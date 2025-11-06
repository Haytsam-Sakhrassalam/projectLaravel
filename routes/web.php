<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::get('/tentang-kami', function () {
    return view('pages.about');
})->name('about');

Route::get('/layanan', function () {
    return view('pages.services'); 
})->name('services');

// routes/web.php
Route::get('/artikel', function () {
    return view('pages.articles');
})->name('articles');

use App\Http\Controllers\ContactController;

Route::get('/hubungi-kami', [ContactController::class, 'show'])->name('contact');
Route::post('/hubungi-kami', [ContactController::class, 'send'])->name('contact.send');



Route::get('/cari', function (\Illuminate\Http\Request $r) {
    return view('pages.search', ['q' => $r->get('q')]);
})->name('search');