<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\AuthController;

// Rotas de autenticação
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

// Rotas para listar todos os itens
Route::get('/items', [ItemController::class, 'index']);

// Rota para buscar um item específico por ID
Route::get('/items/{id}', [ItemController::class, 'show']);
