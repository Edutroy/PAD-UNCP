<?php
namespace App\Models; // Asegúrate de tener el espacio de nombres correcto

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'persona'; // Nombre de la tabla "persona" si es diferente del nombre predeterminado
    protected $primaryKey = 'PersonaID';

    protected $fillable = [
        'Nombre',
        'Apellidos',
        'Correo',
        'Telefono',
        'DNI',
        'IDCARGO',
    ];
   


    /* para el procesp */
    public function demandado()
    {
        return $this->belongsTo(Proceso::class, 'DemandadoID');
    }

    public function demandante()
    {
        return $this->belongsTo(Proceso::class, 'DemandanteID');
    }

    public function instructor()
    {
        return $this->belongsTo(Proceso::class, 'InstructorID');
    }

    public function sancionador()
    {
        return $this->belongsTo(Proceso::class, 'SancionadorID');
    }

    public function oficializador()
    {
        return $this->belongsTo(Proceso::class, 'OficializarID');
    }



}
