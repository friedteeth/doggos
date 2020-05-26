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

Route::get('/', 'HomeController@index');

Route::resource('/asociacion', 'AsociacionController');

Route::resource('/adopcion', 'AdopcionController');

Route::resource('/adoptar', 'AdoptarController');

Route::resource('/inicio_sesion', 'InicioSesionController');

Route::resource('/registro', 'RegistroController');

Route::get('storage/perros/imagenes/{filename}', function ($filename)
{
    $path = storage_path('app/public/perros/imagenes/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    
    return $response;
});

Route::get('storage/asociaciones/imagenes/{filename}', function ($filename)
{
    $path = storage_path('app/public/asociaciones/imagenes/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

Route::get('storage/stock/{filename}', function ($filename)
{
    $path = storage_path('app/public/stock/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

Auth::routes();

Route::get('/home', 'HomeController@index');
