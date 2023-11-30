<?php

namespace Database\Seeders;
use App\Models\Time;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
                'duracion' => now(),
                'extendible' => now()->addHours(2),
            ],
            [
                'duracion' => now()->subDays(3),
                'extendible' => now()->subDays(2)->addHours(3),
            ],
            [
                'duracion' => now()->addMonths(1),
                'extendible' => null, // Este campo es nullable según tu migración
            ],
        ];

        foreach ($data as $item) {
            Time::create($item);
        }
    }
}
