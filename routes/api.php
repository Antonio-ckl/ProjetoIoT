<?php

use App\Http\Controllers\DispositivoController;
use App\Http\Controllers\RegistroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('registro',[RegistroController::class,'store'])->name('registro');

Route::post('dispositivo',[DispositivoController::class, 'store'])->name('dispositivo');



