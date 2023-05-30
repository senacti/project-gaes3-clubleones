<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/1Acond', function () {
    return view('1Acond');
});

Route::get('/ActualizarDatos', function () {
    return view('ActualizarDatos');
});

Route::get('/AgregarEqui', function () {
    return view('AgregarEqui');
});

Route::get('/AgregarJug', function () {
    return view('AgregarJug');
});

Route::get('/campe', function () {
    return view('campe');
});

Route::get('/CrearCampe', function () {
    return view('CrearCampe');
});

Route::get('/CrearProgra', function () {
    return view('CrearProgra');
});

Route::get('/Dashboard', function () {
    return view('Dashboard');
});

Route::get('/EditarEquipo', function () {
    return view('EditarEquipo');
});

Route::get('/entre', function () {
    return view('entre');
});

Route::get('/Equipos', function () {
    return view('Equipos');
});

Route::get('/Error404', function () {
    return view('Error404');
});

Route::get('/Error500', function () {
    return view('Error500');
});

Route::get('/Landing', function () {
    return view('Landing');
});

Route::get('/login', function () {
    return view('Login');
});

Route::get('/Partidos', function () {
    return view('Partidos');
});

Route::get('/Perfil', function () {
    return view('Perfil');
});

Route::get('/RegistrarEntre', function () {
    return view('RegistrarEntre');
});

Route::get('/RegistrarPlan', function () {
    return view('RegistrarPlan');
});

Route::get('/RegistrarTest', function () {
    return view('RegistrarTest');
});

Route::get('/registro', function () {
    return view('Registro');
});

Route::get('/VerEntre', function () {
    return view('VerEntre');
});

Route::get('/VerPerfiles', function () {
    return view('VerPerfiles');
});