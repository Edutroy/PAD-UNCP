<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => '1',
                'username' => 'Administrador',
                'password' => 'admin123'
           
            ],
            [
                'id' => '2',
                'username' => 'Usuario',
                'password' => 'user123',
                
            ],
            ];
        

        foreach ($data as $item) {
            User::create($item);
        }
    }
}
