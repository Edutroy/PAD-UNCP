<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proceso_Fase extends Model
{
    protected $table = 'proceso_fase'; // Nombre de la tabla "persona" si es diferente del nombre predeterminado
    protected $primaryKey = 'id';

    protected $fillable = [
        'proceso_id',
        'fase_id',
        'subfase_id',
        'documento_id',
        'fecha_inicio',
        'fecha_fin',
    ];

    public function proceso(){
        return $this->belongsTo(Proceso::class, 'id','ProcesoID');
    }
    public function subfase(){
        return $this->hasMany(Subfase::class,'subfase_id','id');
    }

}
