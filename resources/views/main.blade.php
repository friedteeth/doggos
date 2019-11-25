<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Adopta mi Perro</title>

  <script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}"></script>

  <script src="{{ asset('js/popper.min.js') }}"></script>

  <script src="{{ asset('js/bootstrap.min.js') }}"></script>

  <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>

  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  
  <link href="{{ asset('css/mystyles.css') }}" rel="stylesheet" type="text/css">

  @yield('styles')

  <style>
    @if(Request::url()==='http://localhost:8000/adopcion')
    #adopcion {
      background: #fff;
    }

    #adopcion a {
      color: #000000;
      background: #fff;
    }
    @endif
    @if(Request::url()==='http://localhost:8000/adoptar')
    #adoptar {
      background: #fff;
    }

    #adoptar a {
      color: #000000;
      background: #fff;
    }

    @endif
    @if(Request::url()==='http://localhost:8000/asociacion')
    #asociacion {
      background: #fff;
    }

    #asociacion a {
      color: #000000;
      background: #fff;
    }

    @endif
  </style>


</head>

<body>

  <div class="wrapper">

    <nav id="sidebar">

      <div class="sidebar-header">
        <a href="{{ url('/') }}" class="d-block h-100">
          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="dog" class="svg-inline--fa doggo-i fa-dog fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M496 96h-64l-7.16-14.31A32 32 0 0 0 396.22 64H342.6l-27.28-27.28C305.23 26.64 288 33.78 288 48.03v149.84l128 45.71V208h32c35.35 0 64-28.65 64-64v-32c0-8.84-7.16-16-16-16zm-112 48c-8.84 0-16-7.16-16-16s7.16-16 16-16 16 7.16 16 16-7.16 16-16 16zM96 224c-17.64 0-32-14.36-32-32 0-17.67-14.33-32-32-32S0 174.33 0 192c0 41.66 26.83 76.85 64 90.1V496c0 8.84 7.16 16 16 16h64c8.84 0 16-7.16 16-16V384h160v112c0 8.84 7.16 16 16 16h64c8.84 0 16-7.16 16-16V277.55L266.05 224H96z"></path></svg>
          <h1>Adopta</h1>
          <h2>mi perro</h2>
        </a>
      </div>

      <div class="sidebar-subheader">
        <p>Conoce tu perro ideal</p>
      </div>

      <ul class="list-unstyled components">
        <li id="adopcion">
          <a href="{{ url('adopcion') }}">Dar en Adopción</a>
        </li>
        <li id="adoptar">
          <a href="{{ url('adoptar') }}">Adoptar</a>
        </li>
        <li id="asociacion">
          <a href="{{ url('asociacion') }}">Asociaciones</a>
        </li>
      </ul>
      <div class="row justify-content-center">
      @guest
        <a class="btn btn-sm logins side-login" href="{{ route('login') }}">Iniciar Sesión</a>
        <a class="btn btn-sm logins side-login" href="{{ route('register') }}">Crear cuenta</a>
      @else
        <a class="btn btn-sm logins side-logout" href="{{ route('logout') }}" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">Cerrar sesión</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      @endguest
      </div>
    </nav>

    <div id="content">

      <nav class="navbar navbar-default navbar-fixed-top" id="topbar">

        <button type="button" id="sidebarCollapse" class="btn btn-circle nav-item">
          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="align-left" class="svg-inline--fa fa-align-left fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M12.83 352h262.34A12.82 12.82 0 0 0 288 339.17v-38.34A12.82 12.82 0 0 0 275.17 288H12.83A12.82 12.82 0 0 0 0 300.83v38.34A12.82 12.82 0 0 0 12.83 352zm0-256h262.34A12.82 12.82 0 0 0 288 83.17V44.83A12.82 12.82 0 0 0 275.17 32H12.83A12.82 12.82 0 0 0 0 44.83v38.34A12.82 12.82 0 0 0 12.83 96zM432 160H16a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm0 256H16a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16z"></path></svg>
        </button>

        @guest
        <div id="right-item" class="top-login">
          <a class="btn btn-sm logins" href="{{ route('login') }}">Inicia Sesión</a>
          <a class="btn btn-sm logins" href="{{ route('register') }}">Crear cuenta</a>
        </div>
        @else
        @yield('welcome')
        <div id="right-item" class="top-logout">
          <a class="btn btn-sm logins" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Cerrar sesión</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
        @endguest

      </nav>

      <div id="child-content">
        @yield('content')
      </div>

    </div>

  </div>

  <script>
    $(document).ready(function () {

      $("#sidebar").mCustomScrollbar({
        theme: "minimal"
      });

      $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $('#content').toggleClass('active');
        $('#right-item').toggleClass('active');
      });

      $(window).resize(function() {
        // This will fire each time the window is resized:
        if($(window).width() <= 768) {
            // if larger or equal
            $('.top-login').hide();
            $('.top-logout').hide();
            $('.side-login').show();
            $('.side-logout').show();
        } else {
            // if smaller
            $('.top-login').show();
            $('.top-logout').show();
            $('.side-login').hide();
            $('.side-logout').hide();
        }
      }).resize();

    });
  </script>

  @yield('scripts')

</body>

</html>