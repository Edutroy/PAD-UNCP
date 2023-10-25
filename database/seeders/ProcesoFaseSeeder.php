<?php

namespace Database\Seeders;

use App\Models\Proceso_Fase;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProcesoFaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => '1',
                'proceso_id'=>'1',
                'fase_id'=>'1',
                'documento_id'=>'1',
                'fecha_inicio'=>'',
                'fecha_fin'=>'',
            ],
            [
                'id' => '2',
                'proceso_id'=>'1',
                'fase_id'=>'2',
                'documento_id'=>'2',
                'fecha_inicio'=>'',
                'fecha_fin'=>'',
            ],
            ];
        

        foreach ($data as $item) {
            Proceso_Fase::create($item);
        }
    }
}
