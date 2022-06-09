<?php


// Esta clase es la que relaciona a los estudiantes con un curso, quiza el nombre no es muy intuitivo.

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\materia;

class MateriaController extends Controller
{
    public function getMateria(){
        return response()->json(materia::all(),200);
    }

    public function getMateriaById($id){
        $materia = materia::find($id);
        if(is_null($materia)){
            return response()->json(['mensaje'=>'Materia no Encontrada'],404);
        }
        return response()->json($materia::find($id),200);
    }

    public function insertMateria(Request $request){
        $materia = materia::create($request->all());
        return response($materia,200);
    }

    public function updateMateria(Request $request, $id){
        $materia = materia::find($id);
        if(is_null($materia)){
            return response()->json(['mensaje'=>'La materia con ese codigo no existe'],404);
        }
        $materia->update($request->all());
        return response($materia,200);
    }

    public function deleteMateria($id){
        $materia = materia::find($id);
        if(is_null($materia)){
            return response()->json(['mensaje'=>'La materia no fue Encontrada'],404);
        }
        $materia->delete();
        return response()->json(['mensaje'=>'La materia se ha eliminado'],200);

    }

}
