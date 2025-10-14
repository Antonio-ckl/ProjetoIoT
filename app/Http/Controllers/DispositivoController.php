<?php

namespace App\Http\Controllers;

use App\Http\Requests\DispositivoRequest;
use App\Models\Sensor;
use Illuminate\Http\Request;

class DispositivoController extends Controller
{
      public function store(DispositivoRequest $request){
            $sensor = Sensor::where('sensor_id', $request->sensor_id)->first();

            if(!$sensor){
                return response()->json(['error'=> 'sensor não encontrado'],404);

            }

            $dispositivo = Sensor::findById([
            'ambiente_id'=>$sensor->ambiente_id,
            'sensor_id'=> $sensor->id,
            'status'=> $sensor->status
        ]);

            return response()->json([
                'success'=>'registro salvo com sucesso',
                'data'=> $dispositivo
            ],201);
        }
}
