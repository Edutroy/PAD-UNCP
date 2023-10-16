<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amonestacion extends Model
{
    protected $table = 'amonestacion'; // Nombre de la tabla "persona" si es diferente del nombre predeterminado
    protected $primaryKey = 'AmonestacionID';

    protected $fillable = [
        'NombreAmonestacion',
    ];
    public function proceso()
    {
        return $this->belongsTo(Proceso::class);
    }
}
