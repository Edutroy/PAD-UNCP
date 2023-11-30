<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subfase extends Model
{
     protected $table = 'subfase'; // Nombre de la tabla "persona" si es diferente del nombre predeterminado
     protected $primaryKey = 'id';
 
     protected $fillable = [
        'subfase',
        'time_id',
     ];
 
     public function proceso_fase(){
         return $this->belongsTo(Proceso_Fase::class,'subfase_id','id');
     }
     public function time(){
        return $this->hasMany(Time::class,'time_id','id');
    }
     
}
