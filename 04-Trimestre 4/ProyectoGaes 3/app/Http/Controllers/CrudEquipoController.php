<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Barryvdh\DomPDF\Facade\Pdf;

use App\Models\equipo;

class CrudEquipoController extends Controller
{
    public function index(){
        $equipo = equipo::all();
        return view('verequipo')->with("equipo", $equipo);
    }

    public function pdf(){
        $equipo=equipo::all();
        $pdf = Pdf::loadView('equipopdf', compact('equipo'));
        return $pdf->stream();
    }
    
    public function create(Request $request){
        $equipo = new equipo();
        $equipo->nombre = $request->nombre;
        $equipo->color_equipacion = $request->color_equipacion;
        $equipo->color_equipacion2 = $request->color_equipacion2;
        $equipo->cantidad_jugadores = $request->cantidad_jugadores;
        $equipo->pago_inscripcion = $request->pago_inscripcion;
        $equipo->save();
        
        return redirect()->route('equipo.index');
    }

    public function update(Request $request, $id_equipo)
    {
        $item = equipo::findOrFail($id_equipo);
    
        $item->nombre = $request->nombre;
        $item->color_equipacion = $request->color_equipacion;
        $item->color_equipacion2 = $request->color_equipacion2;
        $item->cantidad_jugadores = $request->cantidad_jugadores;
        $item->pago_inscripcion = $request->pago_inscripcion;
    
        $item->save();
    
        return redirect()->route('equipo.index')->with('success', 'el equipo se ha actualizado correctamente.');
    }
    

    public function edit($id_equipo){
        $equipo = equipo::find($id_equipo);
        return view('editarequipo', ['equipo' => $equipo]);
    }

    public function delete($id_equipo){
        $equipo = equipo::find($id_equipo);
        $equipo->delete();
        return redirect()->route('equipo.index');
    }
}
