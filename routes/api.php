<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Route::get('/users', [UserController::class, 'getAllUsers']); // Lấy tất cả người dùng
Route::get('/users/{id}/tasks', [UserController::class, 'getUserTasks']); // Lấy tất cả task theo ID người dùng