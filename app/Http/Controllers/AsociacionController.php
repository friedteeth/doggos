<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Asociacion;

class AsociacionController extends Controller {

    public function index() {
        $asociaciones = Asociacion::all();
        return view('asociacion', [
            'asociaciones' => $asociaciones
        ]);
    }
   
    public function show($id_asociacion) {
        $asociaciones = Asociacion::find($id_asociacion);

        return view('asociacion_info', [
            'asociacion' => $asociaciones
        ]);
    }
}