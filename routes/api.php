<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/profile', [AuthController::class, 'profile']);
    // Admin student CRUD
    Route::get('/admin/students', [StudentController::class, 'index']);
    Route::post('/admin/students', [StudentController::class, 'store']);
    Route::get('/admin/students/{id}', [StudentController::class, 'show']);
    Route::put('/admin/students/{id}', [StudentController::class, 'update']);
    Route::delete('/admin/students/{id}', [StudentController::class, 'destroy']);
});
