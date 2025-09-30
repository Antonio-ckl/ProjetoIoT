<?php

use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Livewire\Ambiente\AmbienteList;
use App\Models\Ambiente;
use Illuminate\Support\Facades\Route;

Route::get('ambiente/create', AmbienteCreate::class);

Route::get('ambiente/edit', AmbienteEdit::class);

Route::get('ambiente/list', AmbienteList::class);

use App\Livewire\Dashboard;

use App\Livewire\Registro\RegistroIndex;
use App\Models\Registro;

use App\Livewire\Sensores\SensorCreate;
use App\Livewire\Sensores\SensorEdit;
use App\Livewire\Sensores\SensorList;
use App\Models\Sensor;

use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class);

Route::get('/registro/index',RegistroIndex::class)->name('registro.index');

Route::get('/sensor/create', SensorCreate::class)->name('sensor.create');

Route::get('/sensor/list', SensorList::class)->name('sensor.list');

Route::get('/sensor/edit', SensorEdit::class)->name('sensor.edit');

