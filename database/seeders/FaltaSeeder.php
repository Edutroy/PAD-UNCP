<?php

namespace Database\Seeders;

use App\Models\Falta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaltaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [[

            'id' => '1',   
            'nivel_falta'=> 'leve',
            'descripcion_falta'=>'lorem ipsum 1' ,

        ],
        [

            'id' => '2',
            'nivel_falta'=> 'grave',
            'descripcion_falta'=>'lorem ipsum 2' ,

        ],
        [

            'id' => '3',
            'nivel_falta'=> 'muy grave',
            'descripcion_falta'=>'lorem ipsum 3' ,

        ],[

            'id' => '4',
            'nivel_falta'=> 'leve',
            'descripcion_falta'=>'lorem ipsum 4' ,

        ]];
        foreach ($data as $item) {
            Falta::create($item);
        }
    }
}
