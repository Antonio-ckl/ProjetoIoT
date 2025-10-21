<?php

namespace App\Http\Controllers;

use App\Http\Requests\DispositivoRequest;
use App\Models\Sensor;
use Illuminate\Database\Console\Migrations\StatusCommand;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class DispositivoController extends Controller
{   
       public function index()
    {
        return response()->json(Sensor::all());
    }


    public function show($id)
    {
        $sensor = Sensor::find($id);
        if (!$sensor) {
            return response()->json(['error' => 'Sensor não encontrado'], 404);
        }
        return response()->json($sensor);
    }


    public function alternarStatus($id)
    {
        $dispositivo = Sensor::find($id);

        if ($dispositivo) {
            $dispositivo->status = $dispositivo->status ? 0 : 1;
            $dispositivo->save();

            return response()->json([
                'message' => 'Status atualizado com sucesso',
                'data' => $dispositivo
            ]);
        }

        return response()->json(['error' => 'Dispositivo não encontrado'], 404);
    }

  
    public function store(DispositivoRequest $request)
    {
        $sensor = Sensor::where('sensor_id', $request->sensor_id)->first();

        if (!$sensor) {
            return response()->json(['error' => 'Sensor não encontrado'], 404);
        }

        return response()->json([
            'success' => 'Registro encontrado com sucesso',
            'data' => $sensor
        ], 200);
    }
}
