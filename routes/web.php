<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/csrf-token', function() {
    return response()->json(['token' => csrf_token()]);
}); //obter token


Route::get('usuarios', [UsuarioController::class, 'index'])->name('usuarios.listar'); // listar usuarios

Route::post('usuarios', [UsuarioController::class, 'criar'])->name('usuarios.criar'); // criar usuarios

Route::get('usuarios/{usuario}', [UsuarioController::class, 'listar'])->name('usuarios.exibir'); // exibir usuarios

Route::put('usuarios/{usuario}', [UsuarioController::class, 'editar'])->name('usuarios.atualizar'); // atualizar usuarios

Route::delete('usuarios/{usuario}', [UsuarioController::class, 'excluir'])->name('usuarios.deletar'); // deletar usuarios
