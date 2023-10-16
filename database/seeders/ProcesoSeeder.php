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
            'NumProceso' => '',
            'Estado' => '',
            'IDAmonestacion' => '',
            'SecretarioTecnico' => '',
            'TipoID' => '',
            'DemandadoID' => '',
            'DemandanteID' => '',
            'InstructorID' => '',
            'SancionadorID' => '',
            'OficializarID' => '',
            'IDInstancia' => '',
        ]);
    }
}
