<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;

Route::get('/', function () {
    return view('home');
});

Route::get('/staff-list', [StaffController::class, 'showStaffList'])->name('staff-list');
Route::get('/add-staff', [StaffController::class, 'addStaffForm'])->name('staff.add');
Route::post('/add-staff', [StaffController::class, 'saveStaff'])->name('staff.save');