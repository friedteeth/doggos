@extends('main')

@section('scripts')

<script src="{{ asset('js/form_adopcion.js') }}"></script>
<script src="{{ asset('js/bs-custom-file-input.min.js') }}"></script>

@endsection

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
            <p class="text-warning text-center">Todos campos con un asterisco (*), son obligatorios</p>
            <form action="{{ url('adopcion') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                {{ csrf_field() }}
                <br>
                {{-- DATOS PERSONALES --}}
                <div class="card rounded-lg shadow">
                    <div class="card-header">
                        <h3>Datos Personales</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="motivo" class="col-md-3 col-form-label text-md-right text-dark">*Motivo por el
                                que se da en adopción:</label>

                            <div class="col-md-6">
                                <textarea name="motivo" id="motivoAdopcion" class="form-control 
                                @if(session('err'))
                                    @if($errors->has('motivo'))
                                        is-invalid
                                    @else
                                        is-valid
                                    @endif
                                @endif
                                " 
                                @if(session('err') && $errors->has('motivo'))
                                    autofocus
                                @endif
                                rows="3">{{ old('motivo') ? old('motivo') : '' }}</textarea>
                            </div>

                            <div class="col-md-3">
                                <small class="text-muted">
                                    Máximo 500 caracteres.
                                </small>
                            </div>

                            @error('motivo')
                                <div class="col-md-6 offset-3 text-danger">{{ $message }}</div>
                                <div class="col-md-3"></div>
                            @enderror
                        </div>


                    </div>
                </div>
                {{-- FIN DE DATOS PERSONALES --}}
                <br>
                {{-- DATOS DE CONTACTO --}}
                <div class="card rounded-lg shadow">
                    <div class="card-header">
                        <h3>Datos de Contacto</h3>
                    </div>
                    <div class="card-body">
                        {{-- TELEFONO DE CONTACTO --}}
                        <div class="form-group row">
                            <label for="telefono_dueno"
                                class="col-md-3 col-form-label text-md-right text-dark">*Teléfono:</label>

                            <div class="col-md-6">
                                <input type="text" name="telefono_dueno" id="telefono_dueno"
                                    class="form-control
                                    @if(session('err'))
                                        @if($errors->has('telefono_dueno'))
                                            is-invalid
                                        @else
                                            is-valid
                                        @endif
                                    @endif
                                    "
                                    @if(session('err'))
                                        value="{{ old('telefono_dueno') }}"
                                        @if ($errors->has('telefono_dueno'))
                                            autofocus
                                        @endif
                                    @else
                                        value="{{ Auth::user()->telefono }}"
                                    @endif>
                            </div>

                            <div class="col-md-3">
                                <small class="text-muted">
                                    Debe tener 10 dígitos.
                                </small>
                            </div>

                            @error('telefono_dueno')
                                <div class="col-md-6 offset-3 text-danger">{{ $message }}</div>
                                <div class="col-md-3"></div>
                            @enderror
                        </div>
                        {{-- FIN DE TELEFONO DE CONTACTO --}}
                        {{-- REQUISITOS DE ADOPCION --}}
                        <div class="form-group row">
                            <label for="requisito"
                                class="col-md-3 col-form-label text-md-right text-dark">Requisitos para adopción:</label>

                            <div class="col-md-6">
                                <textarea name="requisito" id="requisito" value="{{ old('requisito') }}" class="form-control
                                @if(session('err'))
                                    @if($errors->has('requisito'))
                                        is-invalid
                                    @else
                                        is-valid
                                    @endif
                                @endif
                                "
                                @if(session('err') && $errors->has('requisito'))
                                    autofocus
                                @endif
                                rows="3">{{ old('requisito') ? old('requisito') : '' }}</textarea>
                            </div>

                            <div class="col-md-3">
                                <small class="text-muted">
                                    Máximo 500 caracteres.
                                </small>
                            </div>

                            @error('requisito')
                                <div class="col-md-6 offset-3 text-danger">{{ $message }}</div>
                                <div class="col-md-3"></div>
                            @enderror
                        </div>
                        {{-- FIN DE REQUISITOS DE ADOPCION --}}
                    </div>
                </div>
                {{-- FIN DE DATOS DE CONTACTO --}}
                <br>
                {{-- DATOS DEL PERRO --}}
                <div class="card rounded-lg shadow">
                    <div class="card-header">
                        <h3>Datos del Perro</h3>
                    </div>
                    <div class="card-body">
                        {{-- NOMBRE DEL PERRO --}}
                        <div class="form-group row">
                            <label for="nombre_perro"
                                class="col-md-3 col-form-label text-md-right text-dark">Nombre:</label>

                            <div class="col-md-6">
                                <input type="text" name="nombre_perro" id="nombre_perro" class="form-control
                                @if(session('err'))
                                    @if($errors->has('nombre_perro'))
                                        is-invalid
                                    @else
                                        is-valid
                                    @endif
                                @endif
                                " 
                                @if(session('err') && $errors->has('nombre_perro'))
                                    autofocus
                                @endif
                                 value="{{ old('nombre_perro') }}">
                            </div>

                            <div class="col-md-3">
                                <small class="text-muted">
                                    Máximo 20 caracteres.
                                </small>
                            </div>

                            @error('nombre_perro')
                                <div class="col-md-6 offset-3 text-danger">{{ $message }}</div>
                                <div class="col-md-3"></div>
                            @enderror
                        </div>
                        {{-- FIN DE NOMBRE DEL PERRO --}}
                        {{-- DESCRIPCION DE COLORES --}}
                        <div class="form-group row">
                            <label for="descripcion_color"
                                class="col-md-3 col-form-label text-md-right text-dark">*Descripción de colores:</label>

                            <div class="col-md-6">
                                <textarea name="descripcion_color" id="descripcion_color" rows="3" class="form-control
                                @if(session('err'))
                                    @if($errors->has('descripcion_color'))
                                        is-invalid
                                    @else
                                        is-valid
                                    @endif
                                @endif
                                " 
                                @if(session('err') && $errors->has('descripcion_color'))
                                    autofocus
                                @endif>{{ old('descripcion_color') ? old('descripcion_color') : '' }}</textarea>
                            </div>

                            <div class="col-md-3">
                                <small class="text-muted">
                                    Máximo 100 caracteres.
                                </small>
                            </div>

                            @error('descripcion_color')
                                <div class="col-md-6 offset-3 text-danger">{{ $message }}</div>
                                <div class="col-md-3"></div>
                            @enderror
                        </div>
                        {{-- FIN DE DESCRIPCION DE COLORES --}}
                        {{-- COMPLEXION DEL PERRO --}}
                        <div class="form-group row">
                            <label for="complexion"
                                class="col-md-3 col-form-label text-md-right text-dark">*Complexión:</label>

                            <div class="col-md-6">
                                <select class="custom-select" name="complexion" id="complexion" >
                                    <option value="Pequeño"
                                    @if (old('complexion') === 'Pequeño')
                                        selected
                                    @endif
                                    >Pequeño</option>
                                    <option value="Mediano"
                                    @if (old('complexion') === 'Mediano')
                                        selected
                                    @endif
                                    >Mediano</option>
                                    <option value="Grande"
                                    @if (old('complexion') === 'Grande')
                                        selected
                                    @endif
                                    >Grande</option>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <small class="text-muted">
                                    Selecciona la complexión de tu perro.
                                </small>
                            </div>
                        </div>
                        {{-- FIN DE COMPLEXION DEL PERRO --}}
                        {{-- EDAD DEL PERRO --}}
                        <div class="form-group row">
                            <label for="edad" class="col-md-3 col-form-label text-md-right text-dark">Edad en
                                meses:</label>

                            <div class="col-md-6">
                                <input type="number" name="edad" id="edad" class="form-control
                                @if(session('err'))
                                    @if($errors->has('edad'))
                                        is-invalid
                                    @else
                                        is-valid
                                    @endif
                                @endif
                                " 
                                @if(session('err') && $errors->has('edad'))
                                    autofocus
                                @endif
                                 value="{{ old('edad') }}" min="1" max="180">
                            </div>

                            <div class="col-md-3">
                                <small class="text-muted">
                                    Edad máxima es de 180 meses.
                                </small>
                            </div>

                            @error('edad')
                                <div class="col-md-6 offset-3 text-danger">{{ $message }}</div>
                                <div class="col-md-3"></div>
                            @enderror
                        </div>
                        {{-- FIN DE EDAD DEL PERRO --}}
                        {{-- ESTADO DEL PERRO --}}
                        <div class="row form-group justify-content-center">
                            {{-- ESTERILIZADO --}}
                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="esterilizado" id="esterilizado" class="form-check-input" 
                                @if (old('esterilizado'))
                                    checked
                                @endif>
                                <label for="esterilizado" class="text-dark form-check-label">Esterilizado</label>
                            </div>
                            {{-- FIN DE ESTERILIZADO --}}
                            {{-- DESPARASITADO --}}
                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="desparasitado" id="desparasitado" class="form-check-input" 
                                @if (old('desparasitado'))
                                    checked
                                @endif>
                                <label for="desparasitado" class="text-dark form-check-label">Desparasitado</label>
                            </div>
                            {{-- FIN DE DESPARASITADO --}}
                            {{-- VACUNADO --}}
                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="vacunado" id="vacunado" class="form-check-input"
                                @if (old('vacunado'))
                                    checked
                                @endif>
                                <label for="vacunado" class="text-dark form-check-label">Vacunado</label>
                            </div>
                            {{-- FIN DE VACUNADO --}}
                        </div>
                        {{-- FIN DE ESTADO DEL PERRO --}}
                        {{-- GENERO DEL PERRO --}}
                        <div class="form-group row justify-content-center">

                            <div class="col-md-6">
                                <label class="col-md-3 col-form-label text-md-right text-dark">Género:</label>
                                {{-- MACHO --}}
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="genero" id="genero_m"
                                        class="form-check-input
                                        @if(session('err'))
                                            @if($errors->has('genero'))
                                                radio-err
                                            @endif
                                        @endif
                                        "
                                        value="Macho"
                                        @if (old('genero') === 'Macho')
                                            checked
                                        @endif>
                                    <label class="form-check-label" for="genero_m">
                                        Macho
                                    </label>
                                </div>
                                {{-- FIN DE MACHO --}}
                                {{-- HEMBRA --}}
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="genero" id="genero_h"
                                        class="form-check-input
                                        @if(session('err'))
                                            @if($errors->has('genero'))
                                                radio-err
                                            @endif
                                        @endif
                                        "
                                        value="Hembra"
                                        @if (old('genero') === 'Hembra')
                                            checked
                                        @endif>
                                    <label class="form-check-label" for="genero_h">
                                        Hembra
                                    </label>
                                </div>
                                {{-- FIN DE HEMBRA --}}
                                @error('genero')
                                <div class="col-md-6 offset-3 text-danger">{{ $message }}</div>
                                <div class="col-md-3"></div>
                            @enderror
                            </div>
                        </div>
                        {{-- FIN DE GENERO DEL PERRO --}}
                        {{-- COMPORTAMIENTO DEL PERRO --}}
                        <div class="form-group row">
                            <label for="comportamiento" class="col-md-3 col-form-label text-md-right text-dark">Comportamiento:</label>

                            <div class="col-md-6">
                                <textarea name="comportamiento" id="comportamiento" class="form-control
                                @if(session('err'))
                                    @if($errors->has('comportamiento'))
                                        is-invalid
                                    @else
                                        is-valid
                                    @endif
                                @endif
                                " 
                                @if(session('err') && $errors->has('comportamiento'))
                                    autofocus
                                @endif
                                 rows="3">{{ old('comportamiento') ? old('comportamiento') : '' }}</textarea>
                            </div>

                            <div class="col-md-3">
                                <small class="text-muted">
                                    Máximo 500 caracteres.
                                </small>
                            </div>

                            @error('comportamiento')
                                <div class="col-md-6 offset-3 text-danger">{{ $message }}</div>
                                <div class="col-md-3"></div>
                            @enderror
                        </div>
                        {{-- FIN DE COMPORTAMIENTO DEL PERRO --}}
                        {{-- OTROS DETALLES DEL PERRO --}}
                        <div class="form-group row">
                            <label for="otros_detalles" class="col-md-3 col-form-label text-md-right text-dark">Otros
                                detalles:</label>   
                            <div class="col-md-6">
                                <textarea name="otros_detalles" id="otros-detalles" class="form-control
                                @if(session('err'))
                                    @if($errors->has('otros-detalles'))
                                        is-invalid
                                    @else
                                        is-valid
                                    @endif
                                @endif
                                " 
                                @if(session('err') && $errors->has('otros_detalles'))
                                    autofocus
                                @endif rows="3">{{ old('otros_detalles') ? old('otros_detalles') : '' }}</textarea>
                            </div>

                            <div class="col-md-3">
                                <small class="text-muted">
                                    Máximo 500 caracteres.
                                </small>
                            </div>

                            @error('otros-detalles')
                                <div class="col-md-6 offset-3 text-danger">{{ $message }}</div>
                                <div class="col-md-3"></div>
                            @enderror
                        </div>
                        {{-- FIN DE OTROS DETALLES DEL PERRO --}}
                        {{-- IMAGEN DEL PERRO --}}
                        <div class="form-group row">
                            <label for="imagen_perro"
                                class="col-md-3 col-form-label text-md-right text-dark">*Imagen:</label>

                            <div class="col-md-6">
                                <div class="custom-file">
                                    <input type="file" name="imagen_perro" id="imagen-perro" class="custom-file-input
                                    @if(session('err'))
                                        @if($errors->has('imagen_perro'))
                                            is-invalid
                                        @endif
                                    @endif
                                    "
                                        @if(session('err') && $errors->has('imagen_perro'))
                                            autofocus
                                        @endif>
                                    <label class="custom-file-label" for="imagen-perro">Selecciona Imagen</label>
                                </div>

                            </div>

                            <div class="col-md-3">
                                <small class="text-muted">
                                    El archivo puede pesar máximo 5 MB.
                                </small>
                            </div>

                            @error('imagen_perro')
                                <div class="col-md-6 offset-3 text-danger">{{ $message }}</div>
                                <div class="col-md-3"></div>
                            @enderror
                        </div>
                        {{-- FIN DE IMAGEN DEL PERRO --}}
                    </div>
                </div>
                {{-- FIN DE DATOS DEL PERRO --}}
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