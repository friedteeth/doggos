@extends('main')

@section('styles'))

<link href="{{ asset('css/login.style.css') }}" rel="stylesheet" type="text/css">

@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-dark">
                    <h3>
                        Inicio de Sesión
                    </h3>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right text-dark">Correo
                                electrónico:</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>

                            @error('email')
                                <div class="col-md-8 offset-4 text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right text-dark">Contraseña:</label>

                            <div class="col-md-8">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">
                            </div>

                            @error('password')
                                <div class="col-md-8 offset-4 text-danger">{{ $message }}</div>
                            @enderror
                            </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-sm btn-primary">
                                    Iniciar Sesión
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    ¿Olvidaste tu contraseña?
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>

                    <div class="text-center text-dark pt-5">
                        ¿No tienes cuenta?
                        <br>
                        <a class="btn btn-link" href="{{ route('register') }}">Crea una ahora mismo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection