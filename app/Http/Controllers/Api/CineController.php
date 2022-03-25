<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Funciones;
use App\Models\Peliculas;
use App\Models\Generos;
use App\Models\Salas;

class CineController extends Controller
{
    public function showFunc(Request $request){
        
        $funciones = Funciones::all();
        $argumentos = array();
        $argumentos['funciones'] = $funciones;

        return $argumentos;
    }

    public function showPelis(Request $request){
        
        $peliculas = Peliculas::all();
        $argumentos = array();
        $argumentos['peliculas'] = $peliculas;

        return $argumentos;
    }

    public function showGeneros(Request $request){
        
        $generos = Generos::all();
        $argumentos = array();
        $argumentos['generos'] = $generos;

        return $argumentos;
    }

    public function showSalas(Request $request){
        
        $salas = Salas::all();
        $argumentos = array();
        $argumentos['salas'] = $salas;

        return $argumentos;
    }
}
