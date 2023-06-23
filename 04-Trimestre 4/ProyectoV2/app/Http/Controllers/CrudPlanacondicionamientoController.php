<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Barryvdh\DomPDF\Facade\Pdf;

use App\Models\planacondicionamiento;

class CrudPlanacondicionamientoController extends Controller
{
    public function index(){
        $planacondicionamiento = planacondicionamiento::all();
        return view('verplanacondicionamiento')->with("planacondicionamiento", $planacondicionamiento);
    }

    public function pdf(){
        $planacondicionamiento=planacondicionamiento::all();
        $pdf = Pdf::loadView('planacondicionamientopdf', compact('planacondicionamiento'));
        return $pdf->stream();
    }
    
    public function create(Request $request){
        $planacondicionamiento = new planacondicionamiento();
        $planacondicionamiento->nombre = $request->nombre;
        $planacondicionamiento->categoria = $request->categoria;
        $planacondicionamiento->tipo = $request->tipo;
        $planacondicionamiento->descripcion = $request->descripcion;
        $planacondicionamiento->id_perfil = $request->id_perfil;
        $planacondicionamiento->save();
        
        return redirect()->route('planacondicionamiento.index');
    }

    public function update(Request $request, $id_planacondicionamiento)
    {
        $item = planacondicionamiento::findOrFail($id_planacondicionamiento);
    
        $item->nombre = $request->nombre;
        $item->categoria = $request->categoria;
        $item->tipo = $request->tipo;
        $item->descripcion = $request->descripcion;
        $item->id_perfil = $request->id_perfil;
    
        $item->save();
    
        return redirect()->route('planacondicionamiento.index')->with('success', 'El plan de acondicionamiento se ha actualizado correctamente.');
    }
    

    public function edit($id_planacondicionamiento){
        $planacondicionamiento = planacondicionamiento::find($id_planacondicionamiento);
        return view('editarplanacondicionamiento', ['planacondicionamiento' => $planacondicionamiento]);
    }

    public function delete($id_planacondicionamiento){
        $planacondicionamiento = planacondicionamiento::find($id_planacondicionamiento);
        $planacondicionamiento->delete();
        return redirect()->route('planacondicionamiento.index');
    }
}
