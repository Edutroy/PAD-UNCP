<?php

namespace Database\Seeders;

use App\Models\Fase;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => '1',
                'nombre_fase'=>'Inicio',
                
            ],
            [
                'id' => '2',
                'nombre_fase'=>'Instructora',
            ],
            [
                'id' => '3',
                'nombre_fase'=>'Sancionadora',
            ],
            ];
        

        foreach ($data as $item) {
            Fase::create($item);
        }
    }
}
