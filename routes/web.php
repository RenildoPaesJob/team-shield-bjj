<?php
use App\Http\Controllers\{
    HomeController,
    AlunoController
};

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware('auth')->get('/', [HomeController::class, 'index'])->name('home');
Route::middleware('auth')->get('/aluno', [AlunoController::class, 'index'])->name('aluno.index');
Route::middleware('auth')->get('/aluno/create', [AlunoController::class, 'create'])->name('aluno.create');
Route::middleware('auth')->post('/aluno/create', [AlunoController::class, 'store'])->name('aluno.create');
Route::middleware('auth')->get('/aluno/{id}', [AlunoController::class, 'show'])->name('aluno.show');

