<?php

namespace Database\Seeders;

use App\Models\Registro;
use App\Models\Sensor;
use Carbon\Carbon;
use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RegistroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $faker = Faker::create('pt-br');
      $sensores = Sensor::all();

      $unidadePorTipo= [
        'temperatura'=> 'ºC',
        'umidade'=> '%',
        'luminosidade'=>'Lux',
        'presenca'=>'ON',
        
      ];

      $dataAtual= Carbon::now('America/Sao_Paulo')->subMonth();
      $dataFinal = Carbon::now('America/Sao_Paulo');

      while($dataAtual->lessThanOrEqualTo($dataFinal)){
        foreach($sensores as $sensor){
            $tipo = $sensor -> tipo;

            $unidade = $unidadePorTipo[$tipo] ?? '';
            switch($tipo){
                case 'temperatura':
                    $valor = $faker-> randomFloat(2,15,350);
                    break;
                    case 'umidade':
                    $valor=$faker->randomFloat(2,20,90);
                    break;
                    case 'luminosidade':
                      $valor = $faker->numberBetween(0,1000);
                      break;
                      case'presenca':
                        $valor = $faker->randomFloat(2,0,100);
                        break;
            }
            Registro::create([
              'sensor_id'=>$sensor->id,
              'valor'=>$valor,
              'unidade'=>$unidade,
              'data_hora'=>$dataAtual->format('Y-m-d H:i:s')
            ]);
        }
        $dataAtual->addMinutes(10);
      }
    }
}
