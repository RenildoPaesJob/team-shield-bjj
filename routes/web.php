<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware('auth')->get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth')->get('/aluno', [App\Http\Controllers\AlunoController::class, 'index'])->name('aluno');
Route::middleware('auth')->get('/aluno/create', [App\Http\Controllers\AlunoController::class, 'create'])->name('create.aluno');
Route::middleware('auth')->post('/aluno/create', [App\Http\Controllers\AlunoController::class, 'store'])->name('create.aluno');
