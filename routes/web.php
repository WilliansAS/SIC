<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\StudentController;
use  App\Http\Controllers\SubjectController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/sinacceso', function () {
    return view('sinacceso');
})->name('sinacceso');

Route::get('/formulario', function () {
    return view('formulario');
})->middleware('auth')->name('formulario');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('estudiantes', StudentController::class);

    Route::resource('asignaturas', SubjectController::class);

    Route::post('/formulario', [StudentsController::class, 'store'])->name('formulario.store'); //Ruta protegida de metodo post de registro

    Route::get('/estudiantes', [StudentController::class, 'index'])->name('estudiantes'); // Ruta protegida de lista de estudiantes
});

require __DIR__.'/auth.php';
