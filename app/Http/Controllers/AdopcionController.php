<?php

namespace App\Http\Controllers;

use Auth;
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

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('form_adopcion');
    }

    /**
     * Con este metodo se almacena una adopcion 
     */
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'telefono_dueno' => 'required|regex:/^[0-9]{10}$/',
            'motivo' => 'required|max:500',
            'requisito' => 'nullable|max:500',
            'nombre_perro' => 'nullable|max:20',
            'descripcion_color' => 'required|max:100',
            'complexion' => 'required',
            'edad' => 'nullable|numeric|between:1,180',
            'genero' => 'required',
            'otros_detalles' => 'nullable|max:500',
            'comportamiento' => 'nullable|max:500',
            'imagen_perro' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);
    
        if($validator->fails()) {
            return redirect('/adopcion')
                ->with('err', 'true')
                ->withInput($request->input())
                ->withErrors($validator);
        }

        $perro = new Perro;
        
        if($request->has('nombre_perro')) {
            $perro->nombre_perro = $request->nombre_perro;
        } else {
            $perro->nombre_perro = null;
        }
        $perro->descripcion_color = $request->descripcion_color;
        $perro->complexion = $request->complexion;
        if($request->has('edad')) {
            $perro->edad = $request->edad;
        } else {
            $perro->edad = null;
        }
        if($request->has('esterilizado')) {
            $perro->esterilizado = true;
        } else {
            $perro->esterilizado = false;
        }
        if($request->has('desparasitado')) {
            $perro->desparasitado = true;
        } else {
            $perro->desparasitado = false;
        }
        if($request->has('vacunado')) {
            $perro->vacunado = true;
        } else {
            $perro->vacunado = false;
        }
        $perro->genero = $request->genero;
        if($request->has('otros_detalles')) {
            $perro->otros_detalles = $request->otros_detalles;
        } else {
            $perro->otros_detalles = null;
        }
        if($request->has('comportamiento')) {
            $perro->comportamiento = $request->comportamiento;
        } else {
            $perro->comportamiento = null;
        }
        $imagen = $request->file('imagen_perro');
        $file_name = $perro->nombre_perro.'_'.time();
        $folder = 'perros/imagenes/';
        $file_path = $folder.$file_name.'.'.$imagen->getClientOriginalExtension();
        $file = $imagen->storeAs($folder, $file_name.'.'.$imagen->getClientOriginalExtension(), 'public');
        $perro->imagen_perro = $file_path;
        $perro->save();
        
        //Despues se asocia el perro a la adopcion
        
        $adopcion = new Adopcion;
        
        $adopcion->id_dueno = Auth::user()->id;
        $adopcion->id_perro = $perro->id;
        $adopcion->telefono_dueno = $request->telefono_dueno;
        $adopcion->motivo_adopcion = $request->motivo;
        if($request->has('requisito')){
            $adopcion->requisito_adopcion = $request->requisito;
        } else {
            $adopcion->requisito_adopcion = null;
        }
        $adopcion->save();
    
        return view('adopcion', [
            'nombre' => $perro->nombre_perro
        ]);
    }
    
}
