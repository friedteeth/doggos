<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Perro;
use App\Adopcion;
use App\User;

/**
 * Esta clase se encarga de administrar las adopciones que se llevan a cabo
 */
class AdoptarController extends Controller {

    /**
     * Este metodo regresa la vista con un listado de perros disponibles
     */
    public function index() {
        $perros = Perro::orderBy('created_at', 'asc')->get();

        foreach ($perros as $perro) {
            $perro->comportamiento = substr($perro->comportamiento, 0, 190);
            if (strlen($perro->comportamiento) == 190) {
                $perro->comportamiento = preg_replace('/\W\w+\s*(\W*)$/', '$1', $perro->comportamiento);
                $perro->comportamiento = $perro->comportamiento.'...';
            }
        }

        return view('adoptar', [
            'perros' => $perros
        ]);
    }

    /**
     * Este metodo se encarga de mostrar a detalle la informacion de un perro
     */
    public function show($id_adopcion) {
        $adopcion = Adopcion::find($id_adopcion);
        $dueno = User::find($adopcion->id_dueno);
        $id_perro = $adopcion->id;


        $perro = Perro::find($id_perro);

        $terms = Auth::user()->terminos_condiciones;

        return view('adoptar_perro', [
            'perro' => $perro,
            'adopcion' => $adopcion,
            'dueno' => $dueno->name,
            'terms' => $terms
        ]);
    }
    
}
