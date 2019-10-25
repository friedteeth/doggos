<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Asociacion;

class AsociacionController extends Controller {

    public function index() {
        $asociacion = Asociacion::all();
        return view('asociacion', [
            'asociacion' => $asociacion
        ]);
    }
    public function detalle($id) {
        return view('asociacion');
    }
}
