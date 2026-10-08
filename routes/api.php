<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\LibroController;
use Illuminate\Support\Facades\Route;

//Ruta 1 - Listar todos los libros
Route::get('/libros', [LibroController::class, 'index']);

//Ruta 2 - Crear un libro
Route::post('/libros', [LibroController::class, 'store']);

//Ruta 3 - Mostrar un libro específico
Route::get('/libros/{id}', [LibroController::class, 'show']);

//Ruta 4 - Actualizar un libro
Route::put('/libros/{id}', [LibroController::class, 'update']);

// Ruta 5 - Eliminar un libro
Route::delete('/libros/{id}', [LibroController::class, 'destroy']);
