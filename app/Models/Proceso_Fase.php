<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proceso_Fase extends Model
{
    protected $table = 'proceso_fase'; // Nombre de la tabla "persona" si es diferente del nombre predeterminado
    protected $primaryKey = 'TipoID';

    protected $fillable = [
        'IDProceso',
        'IDFase',
        'IDDocumento',
    ];
}
