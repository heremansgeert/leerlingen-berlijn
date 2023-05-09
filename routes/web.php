<?php

use App\Http\Controllers\ProfileController;
    use App\Http\Livewire\Student\Index;
    use App\Http\Livewire\Students\Show;
    use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});



Route::middleware('auth')->group(function () {
    Route::get('/students',Index::class)->name('students.index');
    Route::get('/dashboard',Index::class)->name('dashboard');
    Route::get('/students/show/{student}',Show::class)->name('students.show');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
