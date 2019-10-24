<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perro;

class AdoptarController extends Controller {

    public function index() {
        $perros = Perro::orderBy('created_at', 'asc')->get();
        return view('adoptar', [
            'perros' => $perros
        ]);
    }

    public function perro($id) {
        $adopcion = Adopcion::find($id_adopcion);
        $id_perro = $adopcion->id;

        $perro = Perro::find($id_perro);

        return view('adoptar_perro', [
            'perro' => $perro,
            'adopcion' => $adopcion,
        ]);
    }
    
}
