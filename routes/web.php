<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StundentController;
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
    Route::get('/student', [StundentController::class, 'index'])->name('stundent.index');
    Route::get('/student/new-stundent', [StundentController::class, 'create'])->name('stundent.create');
    Route::get('/student/{id}', [StundentController::class, 'show'])->name('stundent.show');
    Route::post('/student', [StundentController::class, 'store'])->name('stundent.store');
    // Route::put('/student', [StundentController::class, 'edit'])->name('stundent.update');
    // Route::delete('/student', [StundentController::class, 'destroy'])->name('stundent.destroy');
});

require __DIR__.'/auth.php';
