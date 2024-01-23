<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\UserController;
use Illuminate\Support\Facades\Route;


Route::get('admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
Route::get('admin/user/list', [UserController::class, 'index'])->name('admin.user.list');
Route::get('admin/user/create', [UserController::class, 'create'])->name('admin.user.create');
