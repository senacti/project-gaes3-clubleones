<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Barryvdh\DomPDF\Facade\Pdf;

use App\Models\test;

class CrudTestController extends Controller
{
    public function index(){
        $test = test::all();
        return view('vertest')->with("test", $test);
    }

    public function pdf(){
        $test=test::all();
        $pdf = Pdf::loadView('testpdf', compact('test'));
        return $pdf->stream();
    }
    
    public function create(Request $request){
        $test = new test();
        $test->nombre = $request->nombre;
        $test->tipo = $request->tipo;
        $test->puntaje_minimo = $request->puntaje_minimo;
        $test->puntaje_maximo = $request->puntaje_maximo;
        $test->puntaje_minimo_bajo = $request->puntaje_minimo_bajo;
        $test->puntaje_maximo_bajo = $request->puntaje_maximo_bajo;
        $test->puntaje_minimo_medio = $request->puntaje_minimo_medio;
        $test->puntaje_maximo_medio = $request->puntaje_maximo_medio;
        $test->puntaje_minimo_alto = $request->puntaje_minimo_alto;
        $test->puntaje_maximo_alto = $request->puntaje_maximo_alto;
        $test->descripcion = $request->descripcion;
        $test->id_perfil = $request->id_perfil;
        $test->save();
        
        return redirect()->route('test.index');
    }

    public function update(Request $request, $id_test)
    {
        $item = test::findOrFail($id_test);
    
        $item->nombre = $request->nombre;
        $item->tipo = $request->tipo;
        $item->puntaje_minimo = $request->puntaje_minimo;
        $item->puntaje_maximo = $request->puntaje_maximo;
        $item->puntaje_minimo_bajo = $request->puntaje_minimo_bajo;
        $item->puntaje_maximo_bajo = $request->puntaje_maximo_bajo;
        $item->puntaje_minimo_medio = $request->puntaje_minimo_medio;
        $item->puntaje_maximo_medio = $request->puntaje_maximo_medio;
        $item->puntaje_minimo_alto = $request->puntaje_minimo_alto;
        $item->puntaje_maximo_bajo = $request->puntaje_maximo_alto;
        $item->descripcion = $request->descripcion;
        $item->id_perfil = $request->id_perfil;
    
        $item->save();
    
        return redirect()->route('test.index')->with('success', 'el test se ha actualizado correctamente.');
    }
    

    public function edit($id_test){
        $test = test::find($id_test);
        return view('editartest', ['test' => $test]);
    }

    public function delete($id_test){
        $test = test::find($id_test);
        $test->delete();
        return redirect()->route('test.index');
    }
}
