<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\Admin\CoursesController;
use App\Http\Controllers\Admin\CollegeController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\PublicStaffController;

// Admin routes
Route::prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // College routes
    Route::resource('colleges', CollegeController::class);

    // Department routes
    Route::resource('departments', DepartmentController::class)->except(['show']);

    // Program routes 
    Route::resource('programs', ProgramController::class)->except(['show']);

    // Course routes
    Route::resource('courses', CoursesController::class)->except(['show']);

    // events routes
    Route::resource('events', EventController::class);

    // Staff routes
    Route::get('staff', [StaffController::class, 'index'])->name('staff.index');
    Route::get('staff/create', [StaffController::class, 'create'])->name('staff.create');
    Route::post('staff', [StaffController::class, 'store'])->name('staff.store');
    Route::get('staff/{id}/edit', [StaffController::class, 'edit'])->name('staff.edit');
    Route::put('staff/{id}', [StaffController::class, 'update'])->name('staff.update');
    Route::delete('staff/{id}', [StaffController::class, 'destroy'])->name('staff.destroy');
});

// Home route
Route::get('/', function () {
    return view('home');
});

// Public staff listing route
Route::get('/staff', [PublicStaffController::class, 'staffList'])->name('staff-list');

// Route to display the dean's welcome message to the public
Route::get('/', [CollegeController::class, 'showDeanMessage'])->name('home');

Route::get('/events', [EventController::class, 'publicindex'])->name('events.index');
Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show');


