<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fase extends Model
{
    protected $table = 'fase'; // Nombre de la tabla "persona" si es diferente del nombre predeterminado
    protected $primaryKey = 'FaseID';

    protected $fillable = [
        'NombreName',
        'FechaIncio',
        'FechaFin',
    ];
}
