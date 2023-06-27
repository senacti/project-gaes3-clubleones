<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Barryvdh\DomPDF\Facade\Pdf;

use App\Models\perfil;

class CrudPerfilController extends Controller
{
    public function index($id_perfil){
        $perfil = perfil::find($id_perfil);
        return view('verperfil')->with("perfil", $perfil);
    }

    public function pdf(){
        $perfil=perfil::all();
        $pdf = Pdf::loadView('perfilpdf', compact('perfil'));
        return $pdf->stream();
    }
    
    public function indexperfiles(){
        $perfil = perfil::all();
        return view('listaperfiles')->with("perfil", $perfil);
    }

    public function create(Request $request){
        $perfil = new perfil();
        $perfil->nombre = $request->nombre;
        $perfil->email = $request->email;
        $perfil->usuario = $request->usuario;
        $perfil->edad = $request->edad;
        $perfil->nivel_flexibilidad = $request->nivel_flexibilidad;
        $perfil->nivel_resistencia = $request->nivel_resistencia;
        $perfil->nivel_fuerza = $request->nivel_fuerza;
        $perfil->id = $request->id;
        $perfil->save();
        
        return redirect()->route('perfil.index');
    }

    public function update(Request $request, $id_perfil)
    {
        $item = perfil::findOrFail($id_perfil);
    
        $item->nombre = $request->nombre;
        $item->email = $request->email;
        $item->usuario = $request->usuario;
        $item->edad = $request->edad;
        $item->nivel_flexibilidad = $request->nivel_flexibilidad;
        $item->nivel_resistencia = $request->nivel_resistencia;
        $item->nivel_fuerza = $request->nivel_fuerza;
        $item->id = $request->id;
    
        $item->save();
    
        return redirect()->route('perfil.index')->with('success', 'el perfil se ha actualizado correctamente.');
    }
    

    public function edit($id_perfil){
        $perfil = perfil::find($id_perfil);
        return view('editarperfil', ['perfil' => $perfil]);
    }

    public function delete($id_perfil){
        $perfil = perfil::find($id_perfil);
        $perfil->delete();
        return redirect()->route('perfil.index');
    }
}