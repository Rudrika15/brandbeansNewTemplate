<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\writer\DashboardController;
use App\Http\Controllers\writer\WriterController;
use App\Http\Controllers\writer\WriterdController;

Route::get('writer/dashboard', [DashboardController::class, 'dashboard'])->name('writer.dashboard');
Route::get('writer/slugs/create', [WriterController::class, 'create'])->name('writer.slugs.create');
Route::post('writer/slugs/store', [WriterController::class, 'store'])->name('writer.slugs.store');
Route::get('writer/slugs/index', [WriterController::class, 'index'])->name('writer.slugs.index');
Route::get('writer/slugs/edit/{id?}', [WriterController::class, 'edit'])->name('writer.slugs.edit');
Route::post('writer/slugs/update', [WriterController::class, 'update'])->name('writer.slugs.update');
Route::get('writer/slugs/delete/{id?}', [WriterController::class, 'delete'])->name('writer.slugs.delete');
