<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertiController;
use App\Models\Properti;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
})->name('landing');


Route::middleware(['web', 'auth', 'admin'])->prefix(('admin'))->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard-admin');
    Route::resource('/kategori',KategoriController::class);

    Route::resource('/property', PropertiController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';

Route::get('/home', [ProdukController::class, 'home'])->name('home');
Route::resource('/shop', ProdukController::class);
Route::get('/about', function () {
    return view('about.index');
})->name('about');
Route::get('/contact', function () {
    return view('contact.index');
})->name('contact');
Route::get('/faq', function () {
    return view('faq.index');
})->name('faq');
Route::get('/profile', function () {
    return view('profile.index');
})->name('profile');
