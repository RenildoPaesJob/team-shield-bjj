<?php
use App\Http\Controllers\{
    HomeController,
    AlunoController,
    HistoricPaymentController,
    PaymentStatusController
};
use Illuminate\Support\Facades\{
    Auth,
    Route
};

Auth::routes();
Route::middleware('auth')->group(function () {

    // routes alunos
    Route::get('/',                     [HomeController::class, 'index'])->name('home');
    // Route::resource('/aluno', AlunoController::class);
    Route::get('/aluno',                [AlunoController::class, 'index'])->name('aluno.index');
    Route::get('/aluno/create',         [AlunoController::class, 'create'])->name('aluno.create');
    Route::post('/aluno/create',        [AlunoController::class, 'store'])->name('aluno.store');
    Route::get('/aluno/{id}/edit',      [AlunoController::class, 'edit'])->name('aluno.edit');
    Route::put('/aluno/{id}/edit',      [AlunoController::class, 'update'])->name('aluno.update');
    Route::get('/aluno/{id}',           [AlunoController::class, 'show'])->name('aluno.show');
    Route::delete('/aluno/destroy/{id}',[AlunoController::class, 'destroy'])->name('aluno.destroy');

    // Route::resource('/pagamento', PaymentStatusController::class);

    //routes historic
    Route::get('/historic',             [HistoricPaymentController::class, 'index'])->name('historic.index');
    Route::get('/historic/create',      [HistoricPaymentController::class, 'create'])->name('historic.create');
    Route::post('/historic/create',     [HistoricPaymentController::class, 'store'])->name('historic.store');
    Route::get('/historic/show/{id}',   [HistoricPaymentController::class, 'show'])->name('historic.show');

});

