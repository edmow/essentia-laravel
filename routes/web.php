<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

// Listar clientes
Route::get('/', [ClienteController::class, 'index'])->name('clientes.index');

// Criação de cliente
Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');

// Cadastro novo cliente
Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');

// Edição de cliente
Route::get('/clientes/{id}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');

// Atualização de cliente existente
Route::put('/clientes/{id}', [ClienteController::class, 'update'])->name('clientes.update');

// Deletar cliente existente
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');