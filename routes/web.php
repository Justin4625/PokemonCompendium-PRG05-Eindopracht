<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Verplichte parameter meegeven
Route::get('/contact', function() {
    $name = 'Pino';
    return view('contact', [
        'name' => $name
    ]);
})->name('contact');

// Named Routed
Route::get('/products/{id}', function (string $id) {
    return view('products', ['id' => $id]);
});

// Optional parameter
Route::get('/user/{name?}', function (?string $name = null) {
    return $name;
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
