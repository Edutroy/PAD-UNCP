<?php

namespace Database\Seeders;

use App\Models\Persona;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
            [
                'id' => '1',
                'nombres' => 'Nombre Uno',
                'apellidos' => 'Apellido Uno',
                'correo' => 'corre1@example.com',
                'telefono' => '98765324',
                'dni' => '78112234',
                'rol_id' => '1',
            ],
            [
                'id' => '2',
                'nombres' => 'Otro Nombre',
                'apellidos' => 'Otros Apellidos',
                'correo' => 'correo@example.com',
                'telefono' => '123456789',
                'dni' => '12345678',
                'rol_id' => '2',
            ],
            [
                'id' => '3',
                'nombres' => 'Nombre Tres',
                'apellidos' => 'Apellidos Tres',
                'correo' => 'correo3@example.com',
                'telefono' => '987654321',
                'dni' => '87654321',
                'rol_id' => '1',
            ],
            [
                'id' => '4',
                'nombres' => 'Nombre Cuatro',
                'apellidos' => 'Apellidos Cuatro',
                'correo' => 'correo4@example.com',
                'telefono' => '555555555',
                'dni' => '43215678',
                'rol_id' => '1',
            ],
            [
                'id' => '5',
                'nombres' => 'Nombre Cinco',
                'apellidos' => 'Apellidos Cinco',
                'correo' => 'correo5@example.com',
                'telefono' => '777777777',
                'dni' => '98761234',
                'rol_id' => '1',
            ],

            [
                'id' => '6',
                'nombres' => 'Nombre Seis',
                'apellidos' => 'Apellidos Seis',
                'correo' => 'correo6@example.com',
                'telefono' => '777777777',
                'dni' => '98761234',
                'rol_id' => '1',
            ],
            // Agrega más registros según tus necesidades
        ];

        foreach ($data as $item) {
            Persona::create($item);
        }
    }
}