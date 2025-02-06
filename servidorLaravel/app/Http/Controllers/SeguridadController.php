<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\View\View;

class SeguridadController extends Controller
{

    public function cookie():View{
        Cookie::queue('Pako','Mi nombre',60);

        return view('seguridad.cookie');
    }

    public function sesionget(Request $request): View
    {
        $nombre=$request->session()->get('nombre');
        
        return view('seguridad.sesionget',['nombre' => $nombre]);
    }
    
    public function sesionset(Request $request,string $nombre="Pakuchi"): View
    {
        $request->session()->put('nombre', $nombre);
        
        return view('seguridad.sesionset', ['nombre' => $nombre]);
    }

}
