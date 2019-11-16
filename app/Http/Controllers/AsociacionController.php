<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Asociacion;

/**
 * Esta clase se encarga de administrar las asociaciones
 */
class AsociacionController extends Controller {

    /**
     * Este metodo regresa una vista con todas las asociaciones displonibles
     */
    public function index() {
        $asociaciones = Asociacion::all();
        return view('asociacion', [
            'asociaciones' => $asociaciones
        ]);
    }
   
    /**
     * Este metodo regresa informacion detallada de una asociacion
     */
    public function show($id_asociacion) {
        $asociaciones = Asociacion::find($id_asociacion);

        return view('asociacion_info', [
            'asociacion' => $asociaciones
        ]);
    }
}