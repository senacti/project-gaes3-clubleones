<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\ejercicio;
use App\Models\planacondicionamiento;

use Illuminate\Support\Facades\Storage;

class CrudEjercicioController extends Controller
{
    public function index($id_planacondicionamiento)
    {
        $ejercicio = ejercicio::where('id_planacondicionamiento', $id_planacondicionamiento)->get();
        $ejercicio->id_planacondicionamiento = $id_planacondicionamiento;
        return view('verejercicio', ['id_planacondicionamiento' => $id_planacondicionamiento, 'ejercicio' => $ejercicio, 'ruta' => session('ruta')]);
    }

    public function createform($id_planacondicionamiento)
{
    $ejercicio = new ejercicio();
    $ejercicio->id_planacondicionamiento = $id_planacondicionamiento;
    return view('crearejercicio', ['id_planacondicionamiento' => $id_planacondicionamiento, 'ejercicio' => $ejercicio, 'ruta' => session('ruta')]);
}

public function create(Request $request, $id_planacondicionamiento)
{
    $planacondicionamiento = planacondicionamiento::find($id_planacondicionamiento);

    $ejercicio = new ejercicio();
    $ejercicio->nombre = $request->nombre;
    // $ejercicio->imagen = $request->imagen;
    // dd($request);
    if ($request->hasFile('imagen')) {
        $imagen = $request->file('imagen');
        $rutaimagen = $imagen->store('public/images');
        $ruta = str_replace('public/images/', '', $rutaimagen);
        // $ruta = Storage::url($rutaimagen);
        $ejercicio->imagen = $ruta;
    }  
    $ejercicio->descripcion = $request->descripcion;
    $ejercicio->cantidad = $request->cantidad;
    $ejercicio->segundos = $request->segundos;
    $ejercicio->id_planacondicionamiento = $planacondicionamiento->id_planacondicionamiento;

    $ejercicio->save();
    return redirect()->route('ejercicio.index', ['id_planacondicionamiento' => $planacondicionamiento->id_planacondicionamiento])->with('planacondicionamiento', $planacondicionamiento)->with('ruta', $ruta);
}

    public function update(Request $request, $id_ejercicio)
    {
        $item = ejercicio::findOrFail($id_ejercicio);
    
        $item->nombre = $request->nombre;
        $item->imagen = $request->imagen;
        $item->descripcion = $request->descripcion;
        $item->cantidad = $request->cantidad;
        $item->segundos = $request->segundos;
        $item->id_planacondicionamiento = $request->id_planacondicionamiento;
    
        $item->save();
    
        return redirect()->route('ejercicio.index')->with('success', 'el ejercicio se ha actualizado correctamente.');
    }
    

    public function edit($id_ejercicio){
        $ejercicio = ejercicio::find($id_ejercicio);
        return view('editarejercicio', ['ejercicio' => $ejercicio]);
    }

    public function delete($id_ejercicio){
        $ejercicio = ejercicio::find($id_ejercicio);
        $id_planacondicionamiento = $ejercicio->id_planacondicionamiento;
        $ejercicio->delete();
        return redirect()->route('ejercicio.index', ['id_planacondicionamiento' => $id_planacondicionamiento]);
    }
}
