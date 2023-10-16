<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proceso extends Model
{
    protected $table = 'procesodisciplinario'; // Nombre de la tabla "persona" si es diferente del nombre predeterminado
    protected $primaryKey = 'ProcesoID';

    protected $fillable = [
        'NumProceso',
        'Estado',
        'IDAmonestacion',
        'SecretarioTecnico',
        'TipoID',
        'DemandadoID',
        'DemandanteID',
        'InstructorID',
        'SancionadorID',
        'OficializarID',
        'IDInstancia',
    ];


    public function demandado()
    {
        return $this->hasOne(Persona::class, 'DemandadoID', 'IDpersona');
    }

    public function demandante()
    {
        return $this->hasOne(Persona::class, 'DemandanteID', 'IDpersona');
    }

    public function instructor()
    {
        return $this->hasOne(Persona::class, 'InstructorID', 'IDpersona');
    }

    public function sancionador()
    {
        return $this->hasOne(Persona::class, 'SancionadorID', 'IDpersona');
    }

    public function oficializador()
    {
        return $this->hasOne(Persona::class, 'OficializarID', 'IDpersona');
    }


    public function amonestacion(){

        return $this->hasOne(Amonestacion::class, 'IDAmonestacion', 'AmonestacionID');
    }
}
