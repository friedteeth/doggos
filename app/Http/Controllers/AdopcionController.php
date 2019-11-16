<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Traits\UploadTrait;
use App\Perro;
use App\Adopcion;
use App\Asociacion;

/**
 * Esta clase se encarga de administrar solicitudes de adopciones
 */

class AdopcionController extends Controller {

    public function index() {
        return view('form_adopcion');
    }

    /**
     * Con este metodo se almacena una adopcion 
     */
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'nombre_dueno' => 'required|max:255',
            'apellidos_dueno' => 'required|max:255',
            'telefono_dueno' => 'required|regex:/[0-9]{10}/',
            'motivo' => 'required|max:510',
            'nombre_perro' => 'required|max:255',
            'descripcion_perro' => 'required|max:510',
            'imagen_perro' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);
    
        if($validator->fails()) {
            return redirect('/adopcion')
                ->withInput()
                ->withErrors($validator);
        }
    
        //Inicialmente se almacena un perro

        $perro = new Perro;
        
        $perro->nombre_perro = $request->nombre_perro;
        $perro->descripcion_perro = $request->descripcion_perro;
        $imagen = $request->file('imagen_perro');
        $file_name = $perro->nombre_perro.'_'.time();
        $folder = 'perros/imagenes/';
        $file_path = $folder.$file_name.'.'.$imagen->getClientOriginalExtension();
        $file = $imagen->storeAs($folder, $file_name.'.'.$imagen->getClientOriginalExtension(), 'public');
        $perro->imagen_perro = $file_path;
        $perro->save();
        
        //Despues se asocia el perro a la adopcion

        $adopcion = new Adopcion;
        
        $adopcion->id_perro = $perro->id;
        $adopcion->nombre_dueno = $request->nombre_dueno;
        $adopcion->apellidos_dueno = $request->apellidos_dueno;
        $adopcion->telefono_dueno = $request->telefono_dueno;
        $adopcion->motivo_adopcion = $request->motivo;
        $adopcion->save();
    
        return view('adopcion', [
            'nombre' => $perro->nombre_perro
        ]);
    }
    
}
