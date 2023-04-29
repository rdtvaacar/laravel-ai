<?php

use Illuminate\Support\Facades\Route;
use Rdtvaacar\LaravelAi\Http\Controllers\AiController;

Route::get('rdtvaacar/ai', [AiController::class, 'index']);
Route::get('rdtvaacar/ai/files', [FileController::class, 'index'])->name('file.index');
Route::get('rdtvaacar/ai/files/{file}', [FileController::class, 'show'])->name('file.show');
Route::post('rdtvaacar/ai/files/{file}', [FileController::class, 'update'])->name('file.update');
Route::post('rdtvaacar/ai/files', [FileController::class, 'create'])->name('file.create');