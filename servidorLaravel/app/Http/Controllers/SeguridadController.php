<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\View\View;

class SeguridadController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function cookie(): View
    {
        Cookie::queue('Pako', 'Mi nombre', 60);
        
        return view('seguridad.cookie');
    }
}
