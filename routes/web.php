<?php

use App\Http\Controllers\Admins;
use App\Http\Controllers\AltasBajas;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Clientes;
use App\Http\Controllers\Inicio;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'login'])->name('auth-login');
Route::post('/logear', [AuthController::class, 'logear'])->name('logear');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/agregarUsuario', [AuthController::class, 'agregarUsuario']);
Route::get('/cliente', [Clientes::class, 'index'])->name('cliente_index');
Route::get('/admin', [Admins::class, 'index'])->name('admin_index');
Route::get('/inicio', [Inicio::class, 'index'])->name('inicio');
Route::get('/altasBajas', [AltasBajas::class,'index'])->name('altasBajas');
Route::get('/create', [AltasBajas::class, 'create'])->name('create');
Route::post('/store', [AltasBajas::class, 'store'])->name('store');
Route::get('/edit/{id}', [AltasBajas::class, 'edit'])->name('edit');
Route::get('/show/{id}', [AltasBajas::class, 'show'])->name('show');
Route::delete('destroy/{id}', [AltasBajas::class, 'destroy'])->name('destroy');

