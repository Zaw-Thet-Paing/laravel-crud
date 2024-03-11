<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class, 'index'])->name('students.index');
Route::get('/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/store', [StudentController::class, 'store'])->name('students.store');
Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('students.edit');
Route::post('/update/{id}', [StudentController::class, 'update'])->name('students.update');
Route::get('/destroy/{id}', [StudentController::class, 'destroy'])->name('students.destroy');
