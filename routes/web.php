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
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/asociacion', function () {
    return view('asociacion');
});

Route::get('/asociacion/{id}', function () {
    return view('asociacion');
});

Route::get('/form_adopcion', function () {
    return view('form_adopcion');
});

Route::post('/adopcion', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'nombre' => 'required|max:255',
        'descripcion' => 'required|max:500',
    ]);
    if($validator->fails()) {
        return redirect('/form_adopcion')
            ->withInput()
            ->withErrors($validator);
    }

    $perro = new Perro;
    $perro->nombre = $request->nombre;
    $perro->descripcion = $request->descripcion;
    $perro->save();

    return view('adopcion', [
        'nombre' => $perro->nombre
    ]);
});

Route::get('/adoptar', function () {
    $perros = Perro::orderBy('created_at', 'asc')->get();

    return view('adoptar', [
        'perros' => $perros
    ]);
});

Route::get('/adoptar/{id}', function () {
    return view('adoptar');
});
