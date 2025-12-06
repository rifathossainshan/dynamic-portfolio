<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

// Frontend Routes
Route::get('/', function () {
    $projects = \App\Models\Project::all();
    return view('index', compact('projects'));
})->name('home');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Routes
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    // Projects Management
    Route::resource('projects', ProjectController::class);

    // Messages Management
    Route::get('/messages', [ContactController::class, 'index'])->name('messages.index');
    Route::get('/messages/{message}', [ContactController::class, 'show'])->name('messages.show');
    Route::delete('/messages/{message}', [ContactController::class, 'destroy'])->name('messages.destroy');
});

require __DIR__.'/auth.php';
