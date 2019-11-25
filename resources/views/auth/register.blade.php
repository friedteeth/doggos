@extends('main')

@section('styles'))

<link href="{{ asset('css/login.style.css') }}" rel="stylesheet" type="text/css">

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <p class="text-warning text-center">Todos campos con un asterisco (*), son obligatorios</p>
            <div class="card">
                <div class="card-header text-dark">
                    <h3>
                        Crear cuenta
                    </h3>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-3 col-form-label text-md-right text-dark">*Nombre
                                completo:</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                            </div>

                            <div class="col-md-3">
                                <small class="text-muted">
                                    Maximo 50 caracteres.
                                </small>
                            </div>

                            @error('name')
                                <div class="col-md-6 offset-3 text-danger">{{ $message }}</div>
                                <div class="col-md-3"></div>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label text-md-right text-dark">*Correo
                                electrónico:</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" autocomplete="email">
                            </div>

                            <div class="col-md-3">
                                <small class="text-muted">
                                    Maximo 50 caracteres.
                                </small>
                            </div>

                            @error('email')
                                <div class="col-md-6 offset-3 text-danger">{{ $message }}</div>
                                <div class="col-md-3"></div>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="telefono"
                                class="col-md-3 col-form-label text-md-right text-dark">*Teléfono:</label>

                            <div class="col-md-6">
                                <input id="telefono" type="tel"
                                    class="form-control @error('telefono') is-invalid @enderror" name="telefono"
                                    value="{{ old('telefono') }}" autocomplete="off" pattern="[0-9]{10}">
                            </div>

                            <div class="col-md-3">
                                <small class="text-muted">
                                    Debe tener 10 digitos.
                                </small>
                            </div>

                            @error('telefono')
                                <div class="col-md-6 offset-3 text-danger">{{ $message }}</div>
                                <div class="col-md-3"></div>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-3 col-form-label text-md-right text-dark">*Contraseña:</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                 autocomplete="new-password">
                            </div>
                            
                            <div class="col-md-3">
                                <small class="text-muted">
                                    La contraseña debe contener minimo 8 caracteres y maximo 16.
                                </small>
                            </div>

                            @error('password')
                                <div class="col-md-6 offset-3 text-danger">{{ $message }}</div>
                                <div class="col-md-3"></div>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                class="col-md-3 col-form-label text-md-right text-dark">*Confirmar contraseña:</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn logins">
                                    Crear cuenta
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection