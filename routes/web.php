<?php

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::fallback(function (){
	$user = Auth::user();

	if(!$user){
		return redirect()->route('login');
	}
	return redirect()->route('dashboard');
});

Route::get('/', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/student', [StudentController::class, 'index'])->name('student.index');
    Route::get('/student/new-student', [StudentController::class, 'create'])->name('student.create');
    Route::get('/student/{id}', [StudentController::class, 'show'])->name('student.show');
    Route::post('/student', [StudentController::class, 'store'])->name('student.store');
    Route::put('/student', [StudentController::class, 'edit'])->name('student.update');
    Route::delete('/student', [StudentController::class, 'destroy'])->name('student.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/payment', [PaymentController::class, 'index'])->name('payment.index');
    Route::get('/payment/new-student', [PaymentController::class, 'create'])->name('payment.create');
    Route::get('/payment/{id}', [PaymentController::class, 'show'])->name('payment.show');
    Route::post('/payment', [PaymentController::class, 'store'])->name('payment.store');
    Route::put('/payment', [PaymentController::class, 'edit'])->name('payment.update');
    Route::delete('/payment', [PaymentController::class, 'destroy'])->name('payment.destroy');
});

require __DIR__.'/auth.php';
