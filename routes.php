<?php

use Illuminate\Support\Facades\Route;
use Rdtvaacar\LaravelAi\Http\Controllers\AiController;

Route::get('/ai', [AiController::class, 'index']);
Route::get('/files', [FileController::class, 'index'])->name('file.index');
Route::get('/files/{file}', [FileController::class, 'show'])->name('file.show');
Route::post('/files/{file}', [FileController::class, 'update'])->name('file.update');
Route::post('/files', [FileController::class, 'create'])->name('file.create');