<?php

namespace Database\Seeders;

use App\Models\Proceso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProcesoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Proceso::create([
           
            'numero_proceso'      => '0001'    ,
            'estado'              => 'Activo'  ,
            'amonestacion_id'     => '1'       ,
            'secretario_tecnico_id'=> '1'       ,
            'proceso_fase_id'     => '1'       ,
            'demandado_id'        => '2'       ,
            'demandante_id'       => '3'       ,
            'instructor_id'       => '4'       ,
            'sancionador_id'      => '5'       ,
            'oficializador_id'    => '6 '      ,
            'instancia'           => '1ra'     ,
        

        ]);
    }
}
