<?php
use App\Http\Controllers\{
    HomeController,
    AlunoController,
    PaymentStatusController
};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::middleware('auth')->group(function () {

    // routes alunos
    Route::get('/',                     [HomeController::class, 'index'])->name('home');
    Route::get('/aluno',                [AlunoController::class, 'index'])->name('aluno.index');
    Route::get('/aluno/create',         [AlunoController::class, 'create'])->name('aluno.create');
    Route::post('/aluno/create',        [AlunoController::class, 'store'])->name('aluno.store');
    Route::get('/aluno/{id}/edit',      [AlunoController::class, 'edit'])->name('aluno.edit');
    Route::put('/aluno/{id}/edit',      [AlunoController::class, 'update'])->name('aluno.update');
    Route::get('/aluno/{id}',           [AlunoController::class, 'show'])->name('aluno.show');
    Route::delete('/aluno/destroy/{id}',[AlunoController::class, 'destroy'])->name('aluno.destroy');

    // routes pagamento
    Route::get('/pagamento',            [PaymentStatusController::class, 'index'])->name('payment.index');
    Route::get('/pagamento/create',     [PaymentStatusController::class, 'create'])->name('payment.create');
    Route::post('/pagamento/create',    [PaymentStatusController::class, 'store'])->name('payment.store');
    Route::get('/pagamento/{id}',       [PaymentStatusController::class, 'show'])->name('payment.show');
    Route::get('/pagamento/edit/{id}',  [PaymentStatusController::class, 'edit'])->name('payment.edit');
    Route::put('/pagamento/edit/{id}',  [PaymentStatusController::class, 'update'])->name('payment.update');
    Route::delete('/pagamento/{id}',    [PaymentStatusController::class, 'destroy'])->name('payment.destroy');
});

