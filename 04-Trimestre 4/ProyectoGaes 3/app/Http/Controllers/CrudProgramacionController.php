<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Barryvdh\DomPDF\Facade\Pdf;

use App\Models\programacion;

class CrudProgramacionController extends Controller
{
    public function index(){
        $programacion = programacion::all();
        return view('verprogramacion')->with("programacion", $programacion);
    }

    public function pdf(){
        $programacion=programacion::all();
        $pdf = Pdf::loadView('programacionpdf', compact('programacion'));
        return $pdf->stream();
    }
    
    public function create(Request $request){
        $programacion = new programacion();
        $programacion->fecha = $request->fecha;
        $programacion->hora = $request->hora;
        $programacion->categoria = $request->categoria;
        $programacion->equipo1 = $request->equipo1;
        $programacion->equipo2 = $request->equipo2;
        $programacion->precio_arbitraje = $request->precio_arbitraje;
        $programacion->direccion = $request->direccion;
        $programacion->save();
        
        return redirect()->route('programacion.index');
    }

    public function update(Request $request, $id_programacion)
    {
        $item = programacion::findOrFail($id_programacion);
    
        $item->fecha = $request->fecha;
        $item->hora = $request->hora;
        $item->categoria = $request->categoria;
        $item->equipo1 = $request->equipo1;
        $item->equipo2 = $request->equipo2;
        $item->precio_arbitraje = $request->precio_arbitraje;
        $item->direccion = $request->direccion;
    
        $item->save();
    
        return redirect()->route('programacion.index')->with('success', 'La programacion se ha actualizado correctamente.');
    }
    

    public function edit($id_programacion){
        $programacion = programacion::find($id_programacion);
        return view('editarprogramacion', ['programacion' => $programacion]);
    }

    public function delete($id_programacion){
        $programacion = programacion::find($id_programacion);
        $programacion->delete();
        return redirect()->route('programacion.index');
    }
}
