<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Falta extends Model
{
    protected $table = 'falta'; // Nombre de la tabla "persona" si es diferente del nombre predeterminado
    protected $primaryKey = 'id';

    protected $fillable = [
        'nivel_falta',
        'descripcion_falta',
    ];

    public function proceso_fase(){
        return $this->belongsTo(Proceso::class,'Proceso','fase_id','id');
    }
}
