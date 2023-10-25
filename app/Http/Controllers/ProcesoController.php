<?php

namespace App\Http\Controllers;

use App\Models\Proceso;
use Illuminate\Http\Request;

class ProcesoController extends Controller
{
    public function index(){
        $procesos = Proceso::get();
        return $procesos;
    }

    public function store(Request $request)   {
        // $validated = $request->validate([
        //     'numero_proceso' => 'required',
        //     'estado' => 'required',
        //     'amonestacion_id' => 'required',
        //     'secretario_tenico_id' => 'required',
        //     'proceso_fase_id' => 'required',
        //     'demandado_id' => 'required',
        //     'demandante_id' => 'required',
        //     'instructor_id' => 'required',
        //     'sancionador_id' => 'required',
        //     'oficializador_id' => 'required',
        //     'instancia' => 'required',
        // ]);
        
        // Lógica para procesar los datos enviados a través de una solicitud POST
       # $data = $request->all();
        // Por ejemplo, puedes crear un nuevo proceso en la base de datos
        $nuevoProceso = Proceso::create([
            'numero_proceso' => $request->numero_proceso,
            'estado' => $request->estado,
            'amonestacion_id' => $request->amonestacion_id,
            'secretario_tecnico_id' => $request->secretario_tecnico_id,
        /*  'proceso_fase_id' => $request->proceso_fase_id, */
            'demandado_id' => $request->demandado_id,
            'demandante_id' => $request->demandante_id,
            'instructor_id' => $request->instructor_id,
            'sancionador_id' => $request->sancionador_id,
            'oficializador_id' => $request->oficializador_id,
            'instancia' => $request->instancia,
        ]);

        return response()->json($nuevoProceso, 201);
    }
    public function delete($id){

        $proceso = Proceso::find($id);

        if ($proceso) {
            $proceso->delete();
            return response()->json(['message' => 'Registro eliminado correctamente']);
        } else {
            return response()->json(['error' => 'Registro no encontrado'], 404);
        }   
    }

    public function update(Request $request) {
        $data = $request->all();

        // Aquí puedes validar los datos si es necesario

        // Los IDs de los registros que deseas actualizar
        $registroIds = $data['registroIds'];

        // Los campos que deseas actualizar
        $camposActualizar = [
            'numero_proceso' => $data['nuevo_numero_proceso'],
            'estado' => $data['nuevo_estado'],
            'amonestacion_id' => $data['nuevo_amonestacion_id'],
            'secretario_tecnico_id' => $data['nuevo_secretario_tecnico_id'],
            // ...otros campos que deseas actualizar
            'demandado_id' => $data['nuevo_demandado_id'],
            'demandante_id' => $data['nuevo_demandante_id'],
            'instructor_id' => $data['nuevo_instructor_id'],
            'sancionador_id' => $data['nuevo_sancionador_id'],
            'oficializador_id' => $data['nuevo_oficializador_id'],
            'instancia' => $data['nuevo_instancia'],
        ];

        // Realiza una actualización masiva
        Proceso::whereIn('id', $registroIds)->update($camposActualizar);

        return response()->json(['message' => 'Registros actualizados correctamente']);
    
}

}