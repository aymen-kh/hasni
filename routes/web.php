<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Item\BeverageController;
use App\Http\Controllers\Item\PlateController;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/home', function () {
    return view('welcome');
});

Route::get('/checkout', function () {
    return view('index');
});
Route::resource('items', ItemController::class);


use App\Http\Controllers\CategoryController;
use App\Models\Item\Beverage;
use App\Http\Controllers\MenuController;

Route::resource('categories', CategoryController::class);
Route::resource('beverages', BeverageController::class);

Route::resource('menus', MenuController::class);

