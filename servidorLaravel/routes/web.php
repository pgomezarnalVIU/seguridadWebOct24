<?php

use App\Http\Controllers\SeguridadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cookie', [SeguridadController::class,'cookie']);
