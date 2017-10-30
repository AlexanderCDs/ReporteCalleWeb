<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    //
    public function index()
    {
    	return view('login');
    }
    
    public function iniciar_sesion()
    {
        return view('modulo');
    }

    public function crear_reporte()
    {
        return view('reportes.crear');
    }

    public function crear_estadistica()
    {
        return view('estadisticas.crear');
    }

    public function registro()
    {
        return view('usuarios.registro');
    }

    public function reporte_pendiente()
    {
        return view('reportes.pendientes');
    }

    public function reportes_aprovados()
    {
        return view('reportes.aprovados');
    }

    public function reportes_nuevos()
    {
        return view('reportes.nuevos');
    }

}
