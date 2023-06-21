<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\partido;


class CrudPartidoController extends Controller
{
    public function index(){
        $partido = partido::all();
        return view('verpartido')->with("partido", $partido);
    }
    
    public function create(Request $request){
        $partido = new partido();
        $partido->equipo1 = $request->equipo1;
        $partido->equipo2 = $request->equipo2;
        $partido->goles_equipo1 = $request->goles_equipo1;
        $partido->jugador_marco_gol_equipo1 = $request->jugador_marco_gol_equipo1;
        $partido->goles_equipo2 = $request->goles_equipo2;
        $partido->jugador_marco_gol_equipo2 = $request->jugador_marco_gol_equipo2;
        $partido->resultado = $request->resultado;
        $partido->faltas_cometidas_equipo1 = $request->faltas_cometidas_equipo1;
        $partido->faltas_cometidas_equipo2 = $request->faltas_cometidas_equipo2;
        $partido->tarjetas_amarillas_equipo1 = $request->tarjetas_amarillas_equipo1;
        $partido->tarjetas_amarillas_equipo2 = $request->tarjetas_amarillas_equipo2;
        $partido->tarjetas_rojas_equipo1 = $request->tarjetas_rojas_equipo1;
        $partido->tarjetas_rojas_equipo2 = $request->tarjetas_rojas_equipo2;
        $partido->pago_arbitraje_equipo1 = $request->pago_arbitraje_equipo1;
        $partido->pago_arbitraje_equipo2 = $request->pago_arbitraje_equipo2;
        $partido->id_campeonato = $request->id_campeonato;

        $partido->save();
        
        return redirect()->route('partido.index');
    }

    public function update(Request $request, $id_partido)
    {
        $item = partido::findOrFail($id_partido);
    
        $item->equipo1 = $request->equipo1;
        $item->equipo2 = $request->equipo2;
        $item->goles_equipo1 = $request->goles_equipo1;
        $item->jugador_marco_gol_equipo1 = $request->jugador_marco_gol_equipo1;
        $item->goles_equipo2 = $request->goles_equipo2;
        $item->jugador_marco_gol_equipo2 = $request->jugador_marco_gol_equipo2;
        $item->resultado = $request->resultado;
        $item->faltas_cometidas_equipo1 = $request->faltas_cometidas_equipo1;
        $item->faltas_cometidas_equipo2 = $request->faltas_cometidas_equipo2;
        $item->tarjetas_amarillas_equipo1 = $request->tarjetas_amarillas_equipo1;
        $item->tarjetas_amarillas_equipo2 = $request->tarjetas_amarillas_equipo2;
        $item->tarjetas_rojas_equipo1 = $request->tarjetas_rojas_equipo1;
        $item->tarjetas_rojas_equipo2 = $request->tarjetas_rojas_equipo2;
        $item->pago_arbitraje_equipo1 = $request->pago_arbitraje_equipo1;
        $item->pago_arbitraje_equipo2 = $request->pago_arbitraje_equipo2;
    
        $item->save();
    
        return redirect()->route('partido.index')->with('success', 'el partido se ha actualizado correctamente.');
    }
    

    public function edit($id_partido){
        $partido = partido::find($id_partido);
        return view('editarpartido', ['partido' => $partido]);
    }

    public function delete($id_partido){
        $partido = partido::find($id_partido);
        $partido->delete();
        return redirect()->route('partido.index');
    }
}
