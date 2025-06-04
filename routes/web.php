<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MealDistributionController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\TeacherController;
use App\Models\MealDistribution;
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
    // Route::resource('students', StudentController::class);
    // Route::resource('distributions', MealDistributionController::class);
    // Route::resource('feedback', FeedbackController::class);
    // Route::resource('classes', ClassesController::class);
});


Route::middleware(['auth', 'checkRole:admin'])->group(function () {
    // halaman yang bisa diakses oleh admin!

    // SCHOOL DATA
    Route::get('/school', [SchoolController::class, 'index'])->name('school.data');
    Route::get('/school/detail', [SchoolController::class, 'showEditForm'])->name('school.detail');
    Route::put('/school/detail', [SchoolController::class, 'update'])->name('school.update');

    // TEACHERS DATA
    Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers');
    Route::get('/teachers/add', [TeacherController::class, 'create'])->name('teachers.addForm');
    Route::post('/teachers/add', [TeacherController::class, 'store'])->name('teachers.addData');
    Route::get('/teachers/edit/{id}', [TeacherController::class, 'edit'])->name('teachers.editForm');
    Route::put('/teachers/edit/{id}', [TeacherController::class, 'update'])->name('teachers.editData');
    Route::delete('/teachers/delete/{id}', [TeacherController::class, 'destroy'])->name('teachers.deleteData');
    Route::get('/teachers/detail/{id}', [TeacherController::class, 'show'])->name('teachers.detail');

    // STUDENTS DATA
    Route::get('/students', [StudentController::class, 'index'])->name('students');
    Route::get('/students/add', [StudentController::class, 'create'])->name('students.addForm');
    Route::post('/students/add', [StudentController::class, 'store'])->name('students.addData');
    Route::get('/students/edit/{id}', [StudentController::class, 'edit'])->name('students.editForm');
    Route::put('/students/edit/{id}', [StudentController::class, 'update'])->name('students.editData');
    Route::delete('/students/delete/{id}', [StudentController::class, 'destroy'])->name('students.deleteData');
    Route::get('/students/detail/{id}', [StudentController::class, 'show'])->name('students.detail');


    // CLASSES DATA
    Route::get('/class', [ClassesController::class, 'index'])->name('class');
    Route::get('/class/edit/{id}', [ClassesController::class, 'edit'])->name('class.edit');
    Route::put('/class/edit/{id}', [ClassesController::class, 'update'])->name('class.update');
    Route::get('/class/add', [ClassesController::class, 'create'])->name('class.add');
    Route::post('/class/add', [ClassesController::class, 'store'])->name('class.addData');
    Route::delete('/class/delete/{id}', [ClassesController::class, 'destroy'])->name('class.delete');
    Route::get('/class/detail/{id}', [ClassesController::class, 'show'])->name('class.detail');

});

Route::middleware(['auth', 'checkRole:guru'])->group(function () {
    // halaman yang boleh diakses oleh guru
});


Route::middleware(['auth', 'checkRole:admin,operator'])->group(function () {
    Route::get('/meals', [MealDistributionController::class, 'index'])->name('meals');
    Route::get('/meals/create', [MealDistributionController::class, 'create'])->name('meals.create');
    Route::post('/meals/create', [MealDistributionController::class, 'store'])->name('meals.store');
    // halaman yang boleh diakses oleh admin & guru
});





Route::view('/teams', 'teams')->name('teams');
require __DIR__ . '/auth.php';
