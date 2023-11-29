<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fase extends Model
{
    protected $table = 'fase'; // Nombre de la tabla "persona" si es diferente del nombre predeterminado
    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre_fase',
        'subfase_id',
     
        

    ];

    public function proceso_fase(){
        return $this->belongsToMany(Proceso::class,'Proceso_Fase','fase_id','id');
    }
    public function subfase(){
        return $this->hasMany(Subfase::class,'subfase_id','id');
    }
   
}
