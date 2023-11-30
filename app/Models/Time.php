<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    protected $table = 'time'; // Nombre de la tabla "persona" si es diferente del nombre predeterminado
     protected $primaryKey = 'id';
 
     protected $fillable = [
        'duracion',
        'extendible',
     ];
 
    

    public function subfase(){
        return $this->belongsTo(Subfase::class,'time_id','id');
    }
}
