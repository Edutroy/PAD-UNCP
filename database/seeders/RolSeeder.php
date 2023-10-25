<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => '1',
                'nombre_rol' => 'Administrador Juridico',
           
            ],
            [
                'id' => '2',
                'nombre_rol' => 'Rector',
                
            ],
            [
                'id' => '3',
                'nombre_rol' => 'Director de la Oficina de Sistenas',
           
            // Agrega más registros según tus necesidades
            ],];
        

        foreach ($data as $item) {
            Rol::create($item);
        }
    }
}
