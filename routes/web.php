<?php

use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'app');
Route::get('/api/skills', [SkillController::class, 'hardcoded']);
Route::get('/api/skills-db', [SkillController::class, 'index']);

