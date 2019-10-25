<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perro;
use App\Adopcion;

class AdoptarController extends Controller {

    public function index() {
        $perros = Perro::orderBy('created_at', 'asc')->get();

        foreach ($perros as $perro) {
            $perro->descripcion_perro = substr($perro->descripcion_perro, 0, 190);
            if (strlen($perro->descripcion_perro) == 190) {
                $perro->descripcion_perro = preg_replace('/\W\w+\s*(\W*)$/', '$1', $perro->descripcion_perro);
                $perro->descripcion_perro = $perro->descripcion_perro.'...';
            }
        }

        return view('adoptar', [
            'perros' => $perros
        ]);
    }

    public function show($id_adopcion) {
        $adopcion = Adopcion::find($id_adopcion);
        $id_perro = $adopcion->id;

        $perro = Perro::find($id_perro);

        return view('adoptar_perro', [
            'perro' => $perro,
            'adopcion' => $adopcion,
        ]);
    }
    
}
