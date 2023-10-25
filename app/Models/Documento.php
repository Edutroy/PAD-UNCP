<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $table = 'documento'; // Nombre de la tabla "persona" si es diferente del nombre predeterminado
    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre',
        'documento_url',
    ];

    public function cargo()
    {
        return $this->hasMany(Rol::class, 'IDCARGO'); // Nombre de la columna en la tabla "persona"
    }
}
