<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function bienvenida() 
    {
        $datos['nombreTienda']='koalas';
        $datos['nombreMascotas']='Canguros y Koalas';
        $datos['nombreMascota']='Capibaras';
        $datos['direccion']='C/gran via, 1';
        return view('paginaBienvenida', $datos);
    }
}
