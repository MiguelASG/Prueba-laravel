<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\estudiante;
use PHPUnit\Util\Json;

class EstudianteController extends Controller
{
    public function getEstudiante(){
        return response()->json(estudiante::all(),200);
    }

    public function getEstudianteById($id){
        $estudiante = estudiante::find($id);
        if(is_null($estudiante)){
            return response()->json(['mensaje'=>'Estudiante no Encontrado'],404);
        }
        return response()->json($estudiante::find($id),200);
    }

    public function insertEstudiante(Request $request){
        $estudiante = estudiante::create($request->all());
        return response($estudiante,200);
    }

    public function updateEstudiante(Request $request, $id){
        $estudiante = estudiante::find($id);
        if(is_null($estudiante)){
            return response()->json(['mensaje'=>'Estudiante no Encontrado'],404);
        }
        $estudiante->update($request->all());
        return response($estudiante,200);
    }

    public function deleteEstudiante($id){
        $estudiante = estudiante::find($id);
        if(is_null($estudiante)){
            return response()->json(['mensaje'=>'Estudiante no Encontrado'],404);
        }
        $estudiante->delete();
        return response()->json(['mensaje'=>'Estudiante se ha eliminado'],200);
    }
}
