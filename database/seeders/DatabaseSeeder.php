<?php

namespace Database\Seeders;

use App\Models\Ambiente;
use App\Models\Sensor;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Ambiente 

        Ambiente::create([
            'nome' => 'Refeitório',
            'descricao' => 'Ambiente destino à alimentação',
            'status' => true,
        ]);

        Ambiente::create([
            'nome' => 'Diretoria',
            'descricao' => 'Ambiente de direção e coordenação',
            'status' => true,
        ]);
        
        Ambiente::create([
            'nome' => 'Pátio',
            'descricao' => 'Ambiente de lazer e descanso',
            'status' => false,
        ]);

        //Sensor

        Sensor::create([
            'ambiente_id' => 1,
            'codigo' => 'AHT12',
            'tipo' => 'Temperatura e Umidade',
            'descricao' => 'Fornece medições ambientais confiáveis e precisas',
            'status' => true,
        ]);

         Sensor::create([
            'ambiente_id' => 2,
            'codigo' => 'C4101',
            'tipo' => 'Presença',
            'descricao' => 'Sensor de radar mmWave compacto e de alto desempenho',
            'status' => false,
        ]);

         Sensor::create([
            'ambiente_id' => 3,
            'codigo' => 'A02YYUE',
            'tipo' => 'Ultrassônico',
            'descricao' =>'Sensor de distância ultrassônico à prova da água',
            'status' => true,
        ]);

    }
}
