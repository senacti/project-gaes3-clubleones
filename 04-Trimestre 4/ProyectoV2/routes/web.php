<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudJugadorController;

// Ruta del welcome, el cual extiende hacia la landing-page

Route::get('/', function () {
    return view('welcome');
});

// Rutas de la landing, si está autenticado no puede ir a ninguna de ellas

Route::get('/landing-acond', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    }

    return view('landing-acond');
});

Route::get('/landing-camp', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    }

    return view('landing-camp');
});

Route::get('/landing-entre', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    }

    return view('landing-entre');
});

Route::get('/landing', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    }

    return view('landing');
});

Route::get('/crearcampeonato', function () {
    return view('crearcampeonato');
});

// Rutas del controlador de login, register y logout, con rutas de login, register y dashboard 

use App\Http\Controllers\Auth\LoginRegisterController;

Route::group(['namespace' => 'App\Http\Controllers\Auth'], function () {
    Route::get('/register', [LoginRegisterController::class, 'register'])->name('register');
    Route::post('/store', [LoginRegisterController::class, 'store'])->name('store');
    Route::get('/login', [LoginRegisterController::class, 'login'])->name('login');
    Route::post('/authenticate', [LoginRegisterController::class, 'authenticate'])->name('authenticate');
    Route::get('/dashboard', [LoginRegisterController::class, 'dashboard'])->name('dashboard');
    Route::post('/logout', [LoginRegisterController::class, 'logout'])->name('logout');
});

// Rutas del controlador del crud que hace alucion a los campeonatos

Route::get('/vercampeonato/campeonatopdf', [App\Http\Controllers\CrudController::class, 'pdf'])->name('campeonato.pdf');

Route::get('/crearcampeonato', function () {
    return view('crearcampeonato');
});

Route::get('/vercampeonato', [App\Http\Controllers\CrudController::class, 'index'])->name('campeonato.index');

Route::post('/crearcampeonato', [App\Http\Controllers\CrudController::class, 'create'])->name('campeonato.create');

Route::get('/campeonato/{id_campeonato}/edit', [App\Http\Controllers\CrudController::class, 'edit'])->name('campeonato.edit');

Route::put('/campeonato/{id_campeonato}', [App\Http\Controllers\CrudController::class, 'update'])->name('campeonato.update');

Route::delete('/campeonato/{id_campeonato}/delete', [App\Http\Controllers\CrudController::class, 'delete'])->name('campeonato.delete');

// Rutas del controlador del crud que hace alucion a la programacion

Route::get('/crearprogramacion', function () {
    return view('crearprogramacion');
});

Route::get('/verprogramacion', [App\Http\Controllers\CrudProgramacionController::class, 'index'])->name('programacion.index');

Route::post('/crearprogramacion', [App\Http\Controllers\CrudProgramacionController::class, 'create'])->name('programacion.create');

Route::get('/programacion/{id_programacion}/edit', [App\Http\Controllers\CrudProgramacionController::class, 'edit'])->name('programacion.edit');

Route::put('/programacion/{id_programacion}', [App\Http\Controllers\CrudProgramacionController::class, 'update'])->name('programacion.update');

Route::delete('/programacion/{id_programacion}/delete', [App\Http\Controllers\CrudProgramacionController::class, 'delete'])->name('programacion.delete');

// Rutas del controlador del crud que hace alucion a los equipos

Route::get('/verequipo/equipopdf', [App\Http\Controllers\CrudEquipoController::class, 'pdf'])->name('equipo.pdf');

Route::get('/crearequipo', function () {
    return view('crearequipo');
});

Route::get('/verequipo', [App\Http\Controllers\CrudEquipoController::class, 'index'])->name('equipo.index');

Route::post('/crearequipo', [App\Http\Controllers\CrudEquipoController::class, 'create'])->name('equipo.create');

Route::get('/equipo/{id_equipo}/edit', [App\Http\Controllers\CrudEquipoController::class, 'edit'])->name('equipo.edit');

Route::put('/equipo/{id_equipo}', [App\Http\Controllers\CrudEquipoController::class, 'update'])->name('equipo.update');

Route::delete('/equipo/{id_equipo}/delete', [App\Http\Controllers\CrudEquipoController::class, 'delete'])->name('equipo.delete');

// Rutas del controlador del crud que hace alucion a los jugadores

Route::get('verjugador/{id_equipo}', [App\Http\Controllers\CrudJugadorController::class, 'index'])->name('jugador.index');

// Ruta para mostrar el formulario de creación de un jugador
Route::get('crearjugador/{id_equipo}', [App\Http\Controllers\CrudJugadorController::class, 'createform'])->name('jugador.createform');

Route::post('crearjugador/{id_equipo}', [App\Http\Controllers\CrudJugadorController::class, 'create'])->name('jugador.create');

Route::get('editarjugador/{id_jugador}', [App\Http\Controllers\CrudJugadorController::class, 'edit'])->name('jugador.edit');

Route::put('editarjugador/{id_jugador}', [App\Http\Controllers\CrudJugadorController::class, 'update'])->name('jugador.update');

Route::delete('eliminarjugador/{id_jugador}', [App\Http\Controllers\CrudJugadorController::class, 'delete'])->name('jugador.delete');

// Rutas del controlador del crud que hace alucion a la partidos

Route::get('/crearpartido', function () {
    return view('crearpartido');
});

Route::get('/verpartido', [App\Http\Controllers\CrudPartidoController::class, 'index'])->name('partido.index');

Route::post('/crearpartido', [App\Http\Controllers\CrudPartidoController::class, 'create'])->name('partido.create');

Route::get('/partido/{id_partido}/edit', [App\Http\Controllers\CrudPartidoController::class, 'edit'])->name('partido.edit');

Route::put('/partido/{id_partido}', [App\Http\Controllers\CrudPartidoController::class, 'update'])->name('partido.update');

Route::delete('/partido/{id_partido}/delete', [App\Http\Controllers\CrudPartidoController::class, 'delete'])->name('partido.delete');

// falta la tabla de jugadores jejeje pero esa es la de menos, la hago cuando termine y domine lo de mi modulo




// AQUI EMPIEZA EL MODULO DE ACONDICIONAMIENTO FISICO

// Rutas del controlador del crud que hace alucion a los perfiles

Route::get('/listaperfiles/perfilpdf', [App\Http\Controllers\CrudPerfilController::class, 'pdf'])->name('perfil.pdf');

Route::get('/listaperfiles', [App\Http\Controllers\CrudPerfilController::class, 'indexperfiles'])->name('perfil.indexperfiles');

Route::get('/crearperfil', function () {
    return view('crearperfil');
});

Route::get('/verperfil/{id_perfil}', [App\Http\Controllers\CrudPerfilController::class, 'index'])->name('perfil.index');

Route::post('/crearperfil', [App\Http\Controllers\CrudPerfilController::class, 'create'])->name('perfil.create');

Route::get('/perfil/{id_perfil}/edit', [App\Http\Controllers\CrudPerfilController::class, 'edit'])->name('perfil.edit');

Route::put('/perfil/{id_perfil}', [App\Http\Controllers\CrudPerfilController::class, 'update'])->name('perfil.update');

Route::delete('/perfil/{id_perfil}/delete', [App\Http\Controllers\CrudPerfilController::class, 'delete'])->name('perfil.delete');

// Rutas del controlador del crud que hace alucion a los test que se registran

Route::get('/vertest/testpdf', [App\Http\Controllers\CrudTestController::class, 'pdf'])->name('test.pdf');

Route::get('/creartest', function () {
    return view('creartest');
});

Route::get('/vertest', [App\Http\Controllers\CrudTestController::class, 'index'])->name('test.index');

Route::post('/creartest', [App\Http\Controllers\CrudTestController::class, 'create'])->name('test.create');

Route::get('/test/{id_test}/edit', [App\Http\Controllers\CrudTestController::class, 'edit'])->name('test.edit');

Route::put('/test/{id_test}', [App\Http\Controllers\CrudTestController::class, 'update'])->name('test.update');

Route::delete('/test/{id_test}/delete', [App\Http\Controllers\CrudTestController::class, 'delete'])->name('test.delete');

// Rutas del controlador del crud que hace alucion a los planes de acondicionamiento que se registran

Route::get('/verplanacondicionamiento/planacondicionamientopdf', [App\Http\Controllers\CrudPlanacondicionamientoController::class, 'pdf'])->name('planacondicionamiento.pdf');

Route::get('/crearplanacondicionamiento', function () {
    return view('crearplanacondicionamiento');
});

Route::get('/verplanacondicionamiento', [App\Http\Controllers\CrudPlanacondicionamientoController::class, 'index'])->name('planacondicionamiento.index');

Route::post('/crearplanacondicionamiento', [App\Http\Controllers\CrudPlanacondicionamientoController::class, 'create'])->name('planacondicionamiento.create');

Route::get('/planacondicionamiento/{id_planacondicionamiento}/edit', [App\Http\Controllers\CrudPlanacondicionamientoController::class, 'edit'])->name('planacondicionamiento.edit');

Route::put('/planacondicionamiento/{id_planacondicionamiento}', [App\Http\Controllers\CrudPlanacondicionamientoController::class, 'update'])->name('planacondicionamiento.update');

Route::delete('/planacondicionamiento/{id_planacondicionamiento}/delete', [App\Http\Controllers\CrudPlanacondicionamientoController::class, 'delete'])->name('planacondicionamiento.delete');

// Rutas del controlador del crud que hace alucion a los ejercicios

Route::get('verejercicio/{id_planacondicionamiento}', [App\Http\Controllers\CrudEjercicioController::class, 'index'])->name('ejercicio.index');

// Ruta para mostrar el formulario de creación de un jugador
Route::get('crearejercicio/{id_planacondicionamiento}', [App\Http\Controllers\CrudEjercicioController::class, 'createform'])->name('ejercicio.createform');

Route::post('crearejercicio/{id_planacondicionamiento}', [App\Http\Controllers\CrudEjercicioController::class, 'create'])->name('ejercicio.create');

Route::get('editarejercicio/{id_ejercicio}', [App\Http\Controllers\CrudEjercicioController::class, 'edit'])->name('ejercicio.edit');

Route::put('editarejercicio/{id_ejercicio}', [App\Http\Controllers\CrudEjercicioController::class, 'update'])->name('ejercicio.update');

Route::delete('eliminarejercicio/{id_ejercicio}', [App\Http\Controllers\CrudEjercicioController::class, 'delete'])->name('ejercicio.delete');

// Rutas del controlador del crud que hace alucion a los entrenamientos que se registran

Route::get('/crearentrenamiento', function () {
    return view('crearentrenamiento');
});

Route::get('/verentrenamiento', [App\Http\Controllers\CrudentrenamientoController::class, 'index'])->name('entrenamiento.index');

Route::post('/crearentrenamiento', [App\Http\Controllers\CrudentrenamientoController::class, 'create'])->name('entrenamiento.create');

Route::get('/entrenamiento/{id_entrenamiento}/edit', [App\Http\Controllers\CrudentrenamientoController::class, 'edit'])->name('entrenamiento.edit');

Route::put('/entrenamiento/{id_entrenamiento}', [App\Http\Controllers\CrudentrenamientoController::class, 'update'])->name('entrenamiento.update');

Route::delete('/entrenamiento/{id_entrenamiento}/delete', [App\Http\Controllers\CrudentrenamientoController::class, 'delete'])->name('entrenamiento.delete');
