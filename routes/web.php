<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FaculController;


Route::get('/', [FaculController::class, 'index']);
Route::get('teacher', [FaculController::class, 'teacher'])->name('teacher');
Route::get('teacher-edit/{id}', [FaculController::class, 'teacherEdit'])->name('teacher-edit');
Route::post('teacher-search', [FaculController::class, 'teacher'])->name('teacher-search');
Route::put('teacher-update/{id}', [FaculController::class, 'teacherUpdate'])->name('teacher-update');
Route::get('teacher-destroy/{id}', [FaculController::class, 'teacherDestroy'])->name('teacher-destroy');
Route::get('student', [FaculController::class, 'student'])->name('student');
Route::get('student-edit/{id}', [FaculController::class, 'studentEdit'])->name('student-edit');
Route::put('student-update/{id}', [FaculController::class, 'studentUpdate'])->name('student-update');
Route::get('student-destroy/{id}', [FaculController::class, 'studentDestroy'])->name('student-destroy');
Route::post('student-search', [FaculController::class, 'student'])->name('student-search');
Route::get('faculty', [FaculController::class, 'faculty'])->name('faculty');
Route::post('faculty-search', [FaculController::class, 'faculty'])->name('faculty-search');
