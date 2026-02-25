<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Route;

//Site
Route::get('/', [SiteController::class, 'index']);

//Login
Route::get('/login', [LoginController::class, 'index']);