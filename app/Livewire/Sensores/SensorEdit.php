<?php

namespace App\Livewire\Sensores;

use App\Models\Sensor;
use Livewire\Component;

class SensorEdit extends Component
{

    public $ambiente_id;
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;

    public function mount($id){
        $sensores = Sensor::findOrFail($id);
        $this->ambiente_id = $sensores->ambiente_id;
        $this->codigo = $sensores->codigo;
        $this->tipo = $sensores->tipo;
        $this->descricao = $sensores->descricao;
        $this->status = $sensores->status;
    }
    

    public function update($id){

        
        $sensor = Sensor::findOrFail($id);
        $sensor->update([
            'ambiente_id'=> $this -> ambiente_id,
            'codigo'=> $this->codigo,
            'tipo'=>$this->tipo,
            'descricao'=>$this->descricao,
            'status'=>$this->status
        ]);

        session()->flash('sucess ', 'Edição de Sensor realizado com sucesso');
                 return redirect()->route('sensor.list');
    }

    public function render()
    {

        return view('livewire.sensores.sensor-edit');
    }
}
