<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MealDistributionController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ClassesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->group(function () {
    // Route::resource('schools', SchoolController::class);
    Route::resource('students', StudentController::class);
    Route::resource('distributions', MealDistributionController::class);
    Route::resource('feedback', FeedbackController::class);
    Route::resource('classes', ClassesController::class);
});

Route::get('/schools', function () {
    return view('classes.index');
})->name('schools');

Route::get('/schools/detail', function () {
    return view('classes.show');
})->name('schools.detail');

Route::view('/teams', 'teams')->name('teams');
require __DIR__ . '/auth.php';
