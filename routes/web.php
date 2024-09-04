<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/form', [PageController::class, 'form'])->name('form');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::name('teacher.')->prefix('/teacher')->group(function () {
        Route::get('/', [TeacherController::class, 'index'])->name('index');
        Route::get('/create', [TeacherController::class, 'create'])->name('create');
        Route::post('/store', [TeacherController::class, 'store'])->name('store');
        Route::delete('/delete/{id}', [TeacherController::class, 'destroy'])->name('delete');
        Route::get('/edit/{id}', [TeacherController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [TeacherController::class, 'update'])->name('update');
        Route::get('/profile/{id}', [TeacherController::class, 'profile'])->name('profile');
    });
    

    Route::name('student.')->prefix('/student')->group(function () {
        Route::get('/', [StudentController::class, 'index'])->name('index');
        Route::post('/create', [StudentController::class, 'store'])->name('create');
    });

    Route::name('courses.')->prefix('/courses')->group(function () {
        Route::get('/', [CoursesController::class, 'index'])->name('index');
        Route::get('/create', [CoursesController::class, 'create'])->name('create');
        Route::post('/store', [CoursesController::class, 'store'])->name('store');
        Route::delete('/delete/{id}', [CoursesController::class, 'destroy'])->name('delete');
        Route::get('/edit/{id}', [CoursesController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [CoursesController::class, 'update'])->name('update');
    });

    Route::name('guest.')->prefix('/guest')->group(function () {
        Route::get('/', [ScheduleController::class, 'index'])->name('index');
        Route::get('/requirements', [ScheduleController::class, 'requirements'])->name('requirements');
        Route::get('/form-fill-up', [ScheduleController::class, 'fillUp'])->name('form-fill-up');
    });

});



require __DIR__.'/auth.php';
