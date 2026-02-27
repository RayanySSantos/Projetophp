<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RegistroController;
use Illuminate\Support\Facades\Route;

//Site
Route::get('/', [SiteController::class, 'index'])->name('site.index');

//Login
Route::get('/login', [LoginController::class, 'index'])->name('site.login');
//Validação do login
Route::post('/login', [LoginController::class, 'autenticar'])->name('auth.login');

//Registro
Route::get('/registro', [RegistroController::class,'index'])->name('site.registro');
//Validação do Registro
Route::post('/registro', [RegistroController::class, 'store'])->name('auth.registro');

Route::middleware('auth')->group(function(){

    Route::get('/dashboard', [SiteController::class, 'dashboard'])->middleware('auth')->name('site.dashboard');

    //Usei esse middleware para conferir se o usuario estava logado/validação
    Route::post('/logout',[LoginController::class, 'logout'])->middleware(middleware:'auth');
});
