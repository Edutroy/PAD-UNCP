<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
     protected $table = 'rol'; // Nombre de la tabla "persona" si es diferente del nombre predeterminado
    protected $primaryKey = 'rolID';
    protected $fillable = [
        'NombreRol',
    ];
    
    public function cargo()
    {
        return $this->hasMany(Rol::class, 'IDCARGO',); // Nombre de la columna en la tabla "persona"
    } 
}

