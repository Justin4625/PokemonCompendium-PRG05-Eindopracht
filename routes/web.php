<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('launch');
})->name('launch');

Route::resource('list', ListController::class);
Route::get('/list/{id}', [ListController::class, 'show'])->name('show')->middleware('auth');
Route::post('/admin/{id}', [AdminController::class, 'update'])->name('admin.update');

Route::get('/pokemon', [SearchController::class, 'index'])->name('list.index');

Route::post('/pokemon/{id}/like', [LikeController::class, 'toggleLike'])->name('toggle.like');

Route::get('/create', function () {
    $user = auth()->user();

    if ($user->likesCount() < 5) {
        return redirect()->route('list.index')->with('error', 'You must like at least 5 Pokémon to access this page.');
    }

    return view('pokemon.create'); // Replace with your actual create page view
})->name('create');


// Verplichte parameter meegeven + named route
Route::get('/contact', function() {
    $name = 'Pino';
    return view('contact', [
        'name' => $name
    ]);
})->name('contact');

// Id meegeven
Route::get('/products/{id}', function (string $id) {
    return view('products', ['id' => $id]);
});

// Optional parameter
Route::get('/user/{name?}', function (?string $name = null) {
    return $name;
});

Route::get('/about-us', [AboutUsController::class, 'show']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
