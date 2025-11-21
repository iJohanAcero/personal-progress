<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\postController;


Route::get('/', [homeController::class, '__invoke']);

Route::get('/posts', [postController::class, 'index']);


Route::get('/posts/create', [postController::class, 'create']);

Route::get('/posts/{post}',[postController::class, 'show']);






// TIPOS DE PETICIONES

//GET  - Traer informacion
//POST - Enviar informacion
//PUT - Actualizar informacion
//PATCH - Modificar informacion parcialmente
//DELETE - Eliminar informacion