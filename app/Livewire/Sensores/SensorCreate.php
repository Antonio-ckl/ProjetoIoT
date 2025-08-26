<?php

namespace App\Livewire\Sensores;

use App\Models\Ambiente;
use App\Models\Sensor;
use Livewire\Component;

class SensorCreate extends Component
{
    public $ambiente_id;
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;


    protected $rules = [
        'codigo' => 'required|unique:sensor,codigo',
        'tipo' => 'required'
    ];

    protected $messages = [
        'codigo.required' => 'o codigo é obrigatorio',
        'codigo.unique' => 'o codigo é unico',
        'tipo.required' => 'o tipo é obrigatorio'
    ];

    public function store()
    {
        $this->validate();

        $ambiente = Ambiente::create([
            'ambiente_id' => $this->ambiente_id
        ]);

        Sensor::create([
            'ambiente_id'=> $ambiente -> ambiente_id,
            'codigo'=> $this->codigo,
            'tipo'=>$this->descricao,
            'status'=>$this->status
        ]);

        session()->flash('sucess ', 'Cadastro de Sensor realizado com sucesso');
    }



    public function render()
    {

        $ambientes = Ambiente::all();

        return view('livewire.sensores.sensor-create', compact('ambientes'));
    }
}
