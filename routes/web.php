<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FaculController;


Route::get('/', [FaculController::class, 'index']);
Route::get('teacher', [FaculController::class, 'teacher'])->name('teacher');
Route::post('teacher-search', [FaculController::class, 'teacher'])->name('teacher-search');
Route::get('student', [FaculController::class, 'student'])->name('student');
Route::post('student-search', [FaculController::class, 'student'])->name('student-search');
Route::get('faculty', [FaculController::class, 'faculty'])->name('faculty');
Route::post('faculty-search', [FaculController::class, 'faculty'])->name('faculty-search');
