<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'app');
Route::get('/api/skills', [SkillController::class, 'hardcoded']);
Route::get('/api/skills-db', [SkillController::class, 'index']);

// Route::get('/comments', [CommentController::class, 'index']);
// Route::post('/comments', [CommentController::class, 'store']);
// Route::put('/comments/{comment}', [CommentController::class, 'update']);
// Route::delete('/comments/{comment}', [CommentController::class, 'destroy']);

Route::get('/api/comments', [CommentController::class, 'index']);
Route::post('/api/comments', [CommentController::class, 'store']);
Route::put('/api/comments/{comment}', [CommentController::class, 'update']);
Route::delete('/api/comments/{comment}', [CommentController::class, 'destroy']);


