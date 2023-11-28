<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proceso extends Model
{
    protected $table = 'proceso_disciplinario'; // Nombre de la tabla "persona" si es diferente del nombre predeterminado
    protected $primaryKey = 'id';

    protected $fillable = [
        'numero_proceso',
        'estado',
        'amonestacion_id',
        'secretario_tecnico_id',
        'proceso_fase_id',
        'demandado_id',
        'demandante_id',
        'instructor_id',
        'sancionador_id',
        'oficializador_id',
        'instancia',

        
    ];

    

    public function secretarioTecnico()
    {
        return $this->hasOne(Persona::class,'id','secretario_tecnico_id');
    }
    public function demandado()
    {
        return $this->hasOne(Persona::class, 'id', 'demandado_id');
    }

    public function demandante()
    {
        return $this->hasOne(Persona::class, 'id', 'demandante_id');
    }

    public function instructor()
    {
        return $this->hasOne(Persona::class, 'id', 'instructor_id');
    }

    public function sancionador()
    {
        return $this->hasOne(Persona::class, 'id', 'sancionador_id');
    }

    public function oficializador()
    {
        return $this->hasOne(Persona::class, 'id', 'oficializador_id');
    }

    public function amonestacion(){

        return $this->hasOne(Amonestacion::class, 'id', 'amonestacion_id');
    }

    public function proceso_fase(){
        return $this->belongsToMany(Fase::class,'Proceso_Fase', 'id','proceso_fase_id');
    }

}
