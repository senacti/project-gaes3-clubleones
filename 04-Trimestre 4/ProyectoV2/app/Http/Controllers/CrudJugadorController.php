<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\jugador;
use App\Models\equipo;

class CrudJugadorController extends Controller
{    
    public function index($id_equipo)
    {
        $jugador = jugador::where('id_equipo', $id_equipo)->get();
        $jugador->id_equipo = $id_equipo;
        return view('verjugador', ['id_equipo' => $id_equipo, 'jugador' => $jugador]);
    }

    public function createform($id_equipo)
{
    $jugador = new jugador();
    $jugador->id_equipo = $id_equipo;
    return view('crearjugador', ['id_equipo' => $id_equipo, 'jugador' => $jugador]);
}

public function create(Request $request, $id_equipo)
{
    $equipo = equipo::find($id_equipo);

    $jugador = new jugador();
    $jugador->nombre = $request->nombre;
    $jugador->identificacion = $request->identificacion;
    $jugador->dorsal = $request->dorsal;
    $jugador->edad = $request->edad;
    $jugador->numero_contacto = $request->numero_contacto;
    $jugador->id_equipo = $equipo->id_equipo;

    $jugador->save();
    return redirect()->route('jugador.index', ['id_equipo' => $equipo->id_equipo])->with('equipo', $equipo);
}

    public function update(Request $request, $id_jugador)
    {
        $item = jugador::findOrFail($id_jugador);
    
        $item->nombre = $request->nombre;
        $item->identificacion = $request->identificacion;
        $item->dorsal = $request->dorsal;
        $item->edad = $request->edad;
        $item->numero_contacto = $request->numero_contacto;
        $item->id_equipo = $request->id_equipo;
    
        $item->save();
    
        return redirect()->route('jugador.index')->with('success', 'el jugador se ha actualizado correctamente.');
    }
    

    public function edit($id_jugador){
        $jugador = jugador::find($id_jugador);
        return view('editarjugador', ['jugador' => $jugador]);
    }

    public function delete($id_jugador){
        $jugador = jugador::find($id_jugador);
        $id_equipo = $jugador->id_equipo;
        $jugador->delete();
        return redirect()->route('jugador.index', ['id_equipo' => $id_equipo]);
    }

}