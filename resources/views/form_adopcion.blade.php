@extends('main')

@section('styles')

<link href="{{ asset('css/form_adopcion.style.css') }}" rel="stylesheet" type="text/css">

@endsection

@section('content')

<div class="container h-100" id="page-container">

    <div class="row h-100 justify-content-center">

        <div class="col-md-5 col-12 text-center" id="main-title">

            <h1 class="text-white big-font">
                ¡Te podemos ayudar!
            </h1>

        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-10 col-12">
            <p class="text-white low-title text-center">Llena tus datos y los datos de tu perro</p>
            <form action="{{ url('adopcion') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                {{ csrf_field() }}
                @include('common.errors')
                <br>
                <div class="card rounded-lg shadow">
                    <div class="card-header">
                        <h3>Datos Personales</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="motivo" class="col-md-4 col-form-label text-md-right text-dark">Motivo por el
                                que se da en adopción:</label>

                            <div class="col-md-6">
                                <textarea name="motivo" id="motivoAdopcion"
                                    class="form-control @error('motivo') is-invalid @enderror" required rows="3"></textarea>

                                @error('motivo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                    </div>
                </div>
                <br>
                <div class="card rounded-lg shadow">
                    <div class="card-header">
                        <h3>Datos de Contacto</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="telefono_dueno"
                                class="col-md-4 col-form-label text-md-right text-dark">Teléfono:</label>

                            <div class="col-md-6">
                                <input type="text" name="telefono_dueno" id="telefono_dueno"
                                    class="form-control  @error('telefono_dueno') is-invalid @enderror"
                                    value="{{ Auth::user()->telefono }}" required >

                                @error('telefono_dueno')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="requisito"
                                class="col-md-4 col-form-label text-md-right text-dark">Requisitos para adopción:</label>

                            <div class="col-md-6">
                                <textarea name="requisito" id="requisito"
                                    class="form-control @error('requisito') is-invalid @enderror" required rows="3"
                                    ></textarea>

                                @error('requisito')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card rounded-lg shadow">
                    <div class="card-header">
                        <h3>Datos del Perro</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="nombre_perro"
                                class="col-md-4 col-form-label text-md-right text-dark">Nombre:</label>

                            <div class="col-md-6">
                                <input type="text" name="nombre_perro" id="nombre_perro"
                                    class="form-control  @error('nombre_perro') is-invalid @enderror" value="" required
                                    >

                                @error('nombre_perro')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="descripcion_color"
                                class="col-md-4 col-form-label text-md-right text-dark">Descripción de colores:</label>

                            <div class="col-md-6">
                                <textarea name="descripcion_color" id="descripcion_color" rows="3"
                                    class="form-control @error('motivo') is-invalid @enderror" required
                                    ></textarea>

                                @error('descripcion_color')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="complexion"
                                class="col-md-4 col-form-label text-md-right text-dark">Complexión:</label>

                            <div class="col-md-6">
                                <select class="custom-select" name="complexion" id="complexion">
                                    <option value="Pequeño ancho">Pequeño ancho</option>
                                    <option value="Pequeño delgado">Pequeño delgado</option>
                                    <option value="Pequeño">Pequeño</option>
                                    <option value="Mediano ancho">Mediano ancho</option>
                                    <option value="Mediano delgado">Mediano delgado</option>
                                    <option value="Mediano">Mediano</option>
                                    <option value="Grande ancho">Grande ancho</option>
                                    <option value="Grande delgado">Grande delgado</option>
                                    <option value="Grande">Grande</option>
                                </select>

                                @error('complexion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="edad" class="col-md-4 col-form-label text-md-right text-dark">Edad en
                                meses:</label>

                            <div class="col-md-6">
                                <input type="number" name="edad" id="edad"
                                    class="form-control  @error('edad') is-invalid @enderror" required  min="1"
                                    max="360">

                                @error('edad')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group justify-content-center">
                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="esterilizado" id="esterilizado"
                                    class="form-check-input"
                                    >
                                <label for="esterilizado" class="text-dark form-check-label">Esterilizado</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="desparasitado" id="desparasitado"
                                    class="form-check-input"
                                    >
                                <label for="desparasitado" class="text-dark form-check-label">Desparasitado</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="vacunado" id="vacunado"
                                    class="form-check-input"
                                    >
                                <label for="vacunado" class="text-dark form-check-label">Vacunado</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="genero" class="col-md-4 col-form-label text-md-right text-dark">Género:</label>

                            <div class="col-md-6">
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="genero" id="genero_m"
                                        class="form-check-input form-control @error('genero') is-invalid @enderror"
                                        value="Macho" required  checked>
                                    <label class="form-check-label" for="genero_m">
                                        Macho
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="genero" id="genero_h"
                                        class="form-check-input form-control @error('genero') is-invalid @enderror"
                                        value="Hembra" required >
                                    <label class="form-check-label" for="genero_h">
                                        Hembra
                                    </label>
                                </div>

                                @error('genero')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="otros_detalles" class="col-md-4 col-form-label text-md-right text-dark">Otros
                                detalles:</label>

                            <div class="col-md-6">
                                <textarea name="otros_detalles" id="otros-detalles"
                                    class="form-control @error('otros_detalles') is-invalid @enderror"
                                    rows="3"></textarea>

                                @error('otros_detalles')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="comportamiento"
                                class="col-md-4 col-form-label text-md-right text-dark">Comportamiento:</label>

                            <div class="col-md-6">
                                <textarea name="comportamiento" id="comportamiento"
                                    class="form-control @error('comportamiento') is-invalid @enderror"
                                    rows="3"></textarea>

                                @error('comportamiento')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="imagen_perro"
                                class="col-md-4 col-form-label text-md-right text-dark">Imagen:</label>

                            <div class="col-md-6">
                                <div class="custom-file">
                                    <input type="file" name="imagen_perro" id="imagen-perro"
                                        class="custon-file-input @error('comportamiento') is-invalid @enderror">
                                </div>

                                @error('imagen_perro')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                    </div>
                </div>
                <br>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-xl logins shadow">
                        Dar en adopción
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>




@endsection