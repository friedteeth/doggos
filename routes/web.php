<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Perro;
use App\Adopcion;
use App\Asociacion;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/asociacion', function () {
    $asociacion = Asociacion::all();
    
    return view('asociacion', [
        'asociacion' => $asociacion
    ]);
});

Route::get('/asociacion/{id}', function () {
    return view('asociacion');
});

Route::get('/form_adopcion', function () {
    return view('form_adopcion');
});

Route::post('/adopcion', function (Request $request) {
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
        return redirect('/form_adopcion')
            ->withInput()
            ->withErrors($validator);
    }

    $perro = new Perro;
    $adopcion = new Adopcion;

    $perro->nombre_perro = $request->nombre_perro;
    $perro->descripcion_perro = $request->descripcion_perro;
    $imagen = $request->file('imagen_perro');
    $file_name = $perro->nombre_perro.'_'.time();
    $folder = '/perros/imagenes/';
    $file_path = $folder.$file_name.'.'.$imagen->getClientOriginalExtension();
    $file = $imagen->storeAs($folder, $file_name.'.'.$imagen->getClientOriginalExtension(), 'public');
    $perro->imagen_perro = $file_path;
    $perro->save();

    $adopcion->id_perro = $perro->id;
    $adopcion->nombre_dueno = $request->nombre_dueno;
    $adopcion->apellidos_dueno = $request->apellidos_dueno;
    $adopcion->telefono_dueno = $request->telefono_dueno;
    $adopcion->motivo_adopcion = $request->motivo;
    $adopcion->save();

    return view('adopcion', [
        'nombre' => $perro->nombre_perro
    ]);
});

Route::get('/adoptar', function () {
    $perros = Perro::orderBy('created_at', 'asc')->get();
    return view('adoptar', [
        'perros' => $perros
    ]);
});

Route::get('/adoptar/{id_adopcion}', function (Request $request, $id_adopcion) {
    $adopcion = Adopcion::find($id_adopcion);
    $id_perro = $adopcion->id;

    $perro = Perro::find($id_perro);

    return view('adoptar_perro', [
        'perro' => $perro,
        'adopcion' => $adopcion,
    ]);
});
