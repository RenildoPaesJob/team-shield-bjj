<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware('auth')->get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth')->get('/aluno', [App\Http\Controllers\AlunoController::class, 'index'])->name('aluno');
Route::middleware('auth')->get('/aluno/new-aluno', [App\Http\Controllers\AlunoController::class, 'newAluno'])->name('new-aluno');
