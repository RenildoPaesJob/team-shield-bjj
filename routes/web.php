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
    Route::get('/',                 [HomeController::class, 'index'])->name('home');
    Route::get('/aluno',            [AlunoController::class, 'index'])->name('aluno.index');
    
    Route::get('/aluno/{id}/edit',  [AlunoController::class, 'edit'])->name('aluno.edit');
    Route::put('/aluno/{id}/edit',  [AlunoController::class, 'update'])->name('aluno.update');
    
    Route::get('/aluno/create',     [AlunoController::class, 'create'])->name('aluno.create');
    Route::post('/aluno/create',    [AlunoController::class, 'store'])->name('aluno.store');
    
    Route::get('/aluno/{id}',           [AlunoController::class, 'show'])->name('aluno.show');
    Route::delete('/aluno/destroy/{id}',[AlunoController::class, 'destroy'])->name('aluno.destroy');

    // routes pagamento
    Route::get('/pagamento', [PaymentStatusController::class, 'index'])->name('payment.index');
});

