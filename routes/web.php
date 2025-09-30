<?php

use App\Livewire\Dashboard;
use App\Livewire\Sensores\SensorCreate;
use App\Livewire\Sensores\SensorEdit;
use App\Livewire\Sensores\SensorList;
use App\Models\Sensor;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class);

Route::get('/sensor/create', SensorCreate::class)->name('sensor.create');

Route::get('/sensor/list', SensorList::class)->name('sensor.list');

Route::get('/sensor/edit', SensorEdit::class)->name('sensor.edit');
