<?php

namespace Database\Seeders;

use App\Models\Documento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => '1',
                'nombre' => 'Acta de constitucion',
                'documento_url'=>'balalalaaa',
            ],
            [
                'id' => '2',
                'nombre' => 'Evidencia de sentencia',
                'documento_url'=>'balalalaaa',
            ],
            [
                'id' => '3',
                'nombre' => 'Codigos penalizadores I',
                'documento_url'=>'balalalaaa',
            // Agrega más registros según tus necesidades
            ],];
        

        foreach ($data as $item) {
            Documento::create($item);
        }
    }
}
