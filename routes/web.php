<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentoController;


Route::get('/', [DocumentoController::class, 'showAdmission'])->name('home');

// Ruta para mostrar el formulario
Route::get('/formulario', function () {
    return view('layouts.formulario'); // Suponiendo que 'formulario' es la vista donde está el formulario
});

// Ruta para almacenar los documentos
Route::post('/documentos', [DocumentoController::class, 'store'])->name('documentos.store');

// Ruta para mostrar la tabla de documentos
Route::get('/tabla', [DocumentoController::class, 'index'])->name('tabla');
