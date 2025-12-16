<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\MatriculaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/estudiantes', 
    [EstudianteController::class, 'index']
)->name('estudiantes');

Route::get('/estudiantes/crear', 
    [EstudianteController::class, 'create']
)->name('estudiantes-crear');

Route::post('/estudiantes/guardar', 
    [EstudianteController::class, 'store']
)->name('estudiantes-guardar');

Route::get('/cursos', 
    [CursoController::class, 'index']
)->name('cursos');

Route::get('/matriculas', 
    [MatriculaController::class, 'index']
)->name('matriculas');





Route::get('/estudiantes/formulario', function () {
    return view('estudiantes.form');
})->name('estudiantes-form');