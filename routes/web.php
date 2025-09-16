<?php

use App\Livewire\Dashboard;
use App\Livewire\Registro\RegistroIndex;
use App\Models\Registro;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class);

Route::get('/registro/index',RegistroIndex::class)->name('registro.index');