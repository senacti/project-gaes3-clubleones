<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\entrenamiento;

class CrudentrenamientoController extends Controller
{
    public function index(){
        $entrenamiento = entrenamiento::all();
        return view('verentrenamiento')->with("entrenamiento", $entrenamiento);
    }
    
    public function create(Request $request){
        $entrenamiento = new entrenamiento();
        $entrenamiento->fecha = $request->fecha;
        $entrenamiento->hora = $request->hora;
        $entrenamiento->tipo_entrenamiento = $request->tipo_entrenamiento;
        $entrenamiento->descripcion = $request->descripcion;
        $entrenamiento->save();
        
        return redirect()->route('entrenamiento.index');
    }

    public function update(Request $request, $id_entrenamiento)
    {
        $item = entrenamiento::findOrFail($id_entrenamiento);
    
        $item->fecha = $request->fecha;
        $item->hora = $request->hora;
        $item->tipo_entrenamiento = $request->tipo_entrenamiento;
        $item->descripcion = $request->descripcion;
    
        $item->save();
    
        return redirect()->route('entrenamiento.index')->with('success', 'El entrenamiento se ha actualizado correctamente.');
    }
    

    public function edit($id_entrenamiento){
        $entrenamiento = entrenamiento::find($id_entrenamiento);
        return view('editarentrenamiento', ['entrenamiento' => $entrenamiento]);
    }

    public function delete($id_entrenamiento){
        $entrenamiento = entrenamiento::find($id_entrenamiento);
        $entrenamiento->delete();
        return redirect()->route('entrenamiento.index');
    }


}