<?php
use App\Http\Controllers\{
    HomeController,
    AlunoController
};

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/aluno', [AlunoController::class, 'index'])->name('aluno.index');
    Route::get('/aluno/{id}', [AlunoController::class, 'show'])->name('aluno.show');

    Route::get('/aluno/create', [AlunoController::class, 'create'])->name('aluno.create');
    Route::post('/aluno/create-aluno', [AlunoController::class, 'store'])->name('aluno.store');
    Route::get('/aluno/{id}', [AlunoController::class, 'show'])->name('aluno.show');
});

