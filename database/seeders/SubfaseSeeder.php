<?php

namespace Database\Seeders;

use App\Models\Subfase;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubfaseSeeder extends Seeder
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
                'duracion'=>'2023-11-20 09:30:00',
                'extendible'=>'2023-11-20 09:30:00',
               
                
            ],
            [
                'id' => '2',
                'subfase'=>'Notificacion',
                'duracion'=>'2023-11-20 09:30:00',
                'extendible'=>'2023-11-21 14:15:00',
               
             
                
            ],
            [
                'id' => '3',
                'subfase'=>'Descargo',
                'duracion'=>'2023-11-22 18:45:00',
                'extendible'=>'2023-11-24 20:20:00',
                
                
            ],
            [
                'id' => '4',
                'subfase'=>'Informe_fin',
                'duracion'=>'2023-11-24 20:20:00',
                'extendible'=>'',
                
            ],
            ];
        

        foreach ($data as $item) {
            Subfase::create($item);
        }
    }

        
    
}
