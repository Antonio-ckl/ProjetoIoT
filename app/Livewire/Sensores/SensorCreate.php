<?php

namespace App\Livewire\Sensores;

use Livewire\Component;

class SensorCreate extends Component
{

    public $codigo;
    public $tipo;
    


    public function render()
    {
        return view('livewire.sensores.sensor-create');
    }
}
