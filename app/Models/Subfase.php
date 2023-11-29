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
        'duracion',
        'extendible',
     ];
 
     public function proceso_fase(){
         return $this->belongsTo(Fase::class,'Fase','subfase_id','id');
     }

     
}
