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



Route::middleware(['auth', 'checkRole:admin'])->group(function () {
    // halaman yang bisa diakses oleh admin!
    Route::get('/school', [SchoolController::class, 'index'])->name('school.data');
    Route::get('/school/detail', [SchoolController::class, 'showEditForm'])->name('school.detail');
    Route::put('/school/detail/{id}', [SchoolController::class, 'update'])->name('school.update');
});

Route::middleware(['auth', 'checkRole:operator'])->group(function () {
    // halaman yang boleh diakses oleh guru
});


Route::middleware(['auth', 'checkRole:admin,operator'])->group(function () {
    // halaman yang boleh diakses oleh admin & guru
    Route::get('/class', function () {
        return view('classes.index');
    })->name('class');
    
    Route::get('/class/detail', function () {
        return view('classes.show');
    })->name('class.detail');

    Route::get('/class/add', function () {
        return view('classes.create');
    })->name('class.add');

    Route::post('/class/add', [ClassesController::class, 'store'])->name('class.addData');
});



Route::view('/teams', 'teams')->name('teams');
require __DIR__ . '/auth.php';
