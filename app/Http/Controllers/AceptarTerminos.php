<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AceptarTerminos extends Controller
{
    public function confirmar(Request $request) {
        $usuario = Auth::user();

        $usuario->terminos_condiciones = 1;

        $usuario->save();

        return back();
    }
}
