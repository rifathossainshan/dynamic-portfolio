<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Frontend Routes
Route::get('/', function () {
    $projects = \App\Models\Project::all();
    $portfolios = \App\Models\Portfolio::orderBy('order', 'asc')->orderBy('created_at', 'desc')->get();
    return view('index', compact('projects', 'portfolios'));
})->name('home');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// Admin Routes
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    // Projects Management
    Route::resource('projects', ProjectController::class);

    // Portfolios Management
    Route::resource('portfolios', PortfolioController::class);

    // Messages Management
    Route::get('/messages', [ContactController::class, 'index'])->name('messages.index');
    Route::get('/messages/{message}', [ContactController::class, 'show'])->name('messages.show');
    Route::delete('/messages/{message}', [ContactController::class, 'destroy'])->name('messages.destroy');
});

require __DIR__ . '/auth.php';
