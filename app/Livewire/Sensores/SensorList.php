<?php

namespace App\Livewire\Sensores;

use App\Models\Sensor;
use Livewire\Component;
use Livewire\WithPagination;

class SensorList extends Component
{

    use WithPagination;
     public $search = '';
    public $perPage = 10;

    protected $queryString = [
        'search'=>['except'=>''],
        'perPage'=>['except'=> 10]
    ];
    
    public function render()
    {

          $sensor= Sensor::where( 'nome','like', "%{$this->search}%" )
        ->orWhere('tipo', 'like', "%{$this->search}%")
        ->orWhere('ambiente', 'like', "%{$this->search}%")
        ->paginate($this->perPage);


        return view('livewire.sensores.sensor-list', compact('sensor'));
    }
}
