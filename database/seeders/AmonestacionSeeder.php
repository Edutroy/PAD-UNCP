<?php

namespace Database\Seeders;

use App\Models\Amonestacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AmonestacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Amonestacion::create([

            'id' => '1',
            'nombre_amonestacion' => 'Destitución',

        ]);
    }
}
