<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('home');
});
Route::get('/staff-list', [StaffController::class, 'showStaffList'])->name('staff-list');
Route::get('/add-staff', [StaffController::class, 'addStaffForm'])->name('staff.add');
Route::post('/add-staff', [StaffController::class, 'saveStaff'])->name('staff.save');
// Routing for departmentController

Route::get('/departments', [DepartmentController::class, 'showDepartmentList'])->name('departments-list');
Route::get('/departments/add', [DepartmentController::class, 'addDepartmentForm'])->name('departments-add-form');
Route::post('/departments/save', [DepartmentController::class, 'saveDepartment'])->name('departments-save');

// Routing for collageController
Route::get('/colleges', [CollegeController::class, 'showCollegeList'])->name('colleges-list');
Route::get('/colleges/add', [CollegeController::class, 'addCollegeForm'])->name('colleges-add-form');
Route::post('/colleges/save', [CollegeController::class, 'saveCollege'])->name('colleges-save');
// Routing for StudentController
Route::get('/students', [StudentController::class, 'showStudentList'])->name('student-list');
Route::get('/students/add', [StudentController::class, 'addStudentForm'])->name('student-add');
Route::post('/students/save', [StudentController::class, 'saveStudent'])->name('student-save');
Route::get('/students/edit/{id}', [StudentController::class, 'editStudentForm'])->name('student-edit');
Route::post('/students/update/{id}', [StudentController::class, 'updateStudent'])->name('student-update');
Route::delete('/students/delete/{id}', [StudentController::class, 'deleteStudent'])->name('student-delete');

