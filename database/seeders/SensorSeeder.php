<?php

namespace Database\Seeders;

use App\Models\Ambiente;
use App\Models\Sensor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SensorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Faker = Faker::create('pt-br');
        $ambientes = Ambiente::all();

        for($i=1;$i<=40;$i++){
            Sensor::create([
                'codigo' => 'S'. $i,
                'tipo'=> $Faker->randomElement(['luminosidade','rfid', 'infravermelho', 'temperatura', 'umidade',]),
                'descricao'=> $Faker->sentence(),
                'status'=>$Faker->boolean(80),
                'ambiente_id'=> $ambientes->random()->id
            ]);
        }
    }
}
