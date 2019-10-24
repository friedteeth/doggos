<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Adopta mi Perro</title>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>

  <!-- Popper.JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>

  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

  <!-- jQuery Custom Scroller CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

  <!-- Font Awesome JS -->
  <script src="https://use.fontawesome.com/releases/v5.11.2/js/all.js" data-auto-replace-svg></script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

  <!-- Personal styles -->
  <style>
      
@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";

body {
    font-family: 'Poppins', sans-serif;
}

html, body {
  height: 100%;
  width: 100%;
  overflow-x: hidden;
}

.wrapper {
    display: flex;
    width: 100%;
    height: 100%;
    /* align-items: stretch; */
}

.linea {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #408955;
}

.fas {
    color: #408955;
}

.btn-circle {
    width: 40px;
    height: 40px;
    border-radius: 25px;
    text-align: center;
    font-size: 18px;
}

.logins {
  color: #1F6834;
  border: 2px solid #1F6834;
  border-radius: 40px;
  transition: all 0.3s;
}

.logins:hover {
  color: white;
  background: #1F6834;
}


#sidebarCollapse {
  color: #FFF;
  background: #5FA874;
}

#sidebarCollapse:hover {
  color: #FFF;
  background: #408955;
}

a,
a:hover,
a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

#sidebar {
  width: 260px;
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  z-index: 999;
  background: #5FA874;
  color: #FFF;
  transition: all 0.3s;
}

#right-item {
  margin-right: 260px;
  transition: all 0.3s;
}

#sidebar.active {
    margin-left: -260px;
}

#right-item.active {
  margin-right: 0;
}

#sidebar .sidebar-header {
    text-align: center;
    background: #408955;
    padding-top: 10px;
    padding-bottom: 10px;
}

#sidebar .sidebar-subheader {
    text-align: center;
    font-size: 0.9em;
    padding-top: 5px;
    padding-bottom: 5px;
    background: #D6FADF;
}

#sidebar .sidebar-subheader p {
    display: inline;
    color: #509965;
}

#sidebar ul li a {
    padding: 10px;
    padding-left: 15px;
    font-size: 1.2em;
    display: block;
}

#sidebar ul li a:hover {
    color: #5FA874;
    background: #fff;
}

#sidebar a {
    color: #FFF;
}

#topbar {
  z-index: 9999;
  position: fixed;
  top: 0;
  width: 100%;
  background: #9AD1B6;
}

#content {
  transition: all 0.3s;
  margin-left: 260px;
  padding-top: 40px;
  /* height: 100hv; */
  width: 100%;
}

#content.active {
  margin-left: 0;
}

#child-content {
  padding-top: 25px;
}

@yield('styles')

/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */

@media (max-width: 768px) {
    #sidebar {
      margin-left: -260px;
    }
    #sidebar.active {
        margin-left: 0;
    }
    #content.active {
      margin-left: 260px;
    }
    #content {
      margin-left: 0;
      /* padding-top: 0; */
    }
    #sidebarCollapse span {
        display: none;
    }
}

/* My color palette */
.test {
    background-color: #5FA874;
    background-color: #9AD1B6;
    background-color: #D6FADF;
    background-color: #91C9D6;
    background-color: #457F8D;
}
  </style>

</head>

<body>

  <!-- Envoltorio -->
  <div class="wrapper">

    <!-- Barra de Navegacion -->
    <nav id="sidebar">

      <div class="sidebar-header">
        <a href="{{ url('/') }}" class="d-block h-100">
          <i class="fas fa-dog fa-3x"></i>
          <h1>Adopta</h1>
          <h2>mi perro</h2>
        </a>
      </div>

      <div class="sidebar-subheader">
        <p>Conoce tu perro ideal</p>
      </div>

      <ul class="list-unstyled components">
        <li>
        <a href="{{ url('adopcion') }}">Da en Adopci&oacute;n</a>
        </li>
        <li>
          <a href="{{ url('adoptar') }}">Adopta</a>
        </li>
        <li>
          <a href="{{ url('asociacion') }}">Asociaciones</a>
        </li>
      </ul>

      <!-- <div class="linea"></div> -->

    </nav>
    <!-- Fin de Barra de Navegacion -->

    <!-- Contenido -->
    <div id="content">
      
      <nav class="navbar navbar-default navbar-fixed-top" id="topbar">

        <button type="button" id="sidebarCollapse" class="btn btn-circle nav-item">
            <i class="fas fa-align-left"></i>
        </button>

        <div id="right-item">
          <a class="btn btn-sm logins" href="{{ url('storage/inicia_sesion') }}">Inicia Sesion</a>
          <a class="btn btn-sm logins" href="{{ url('storage/registro') }}">Registrate</a>
        </div>

      </nav>

      <div id="child-content">
        @yield('content')
      </div>

    </div>
    <!-- Fin de Contenido -->

    

  </div>
  <!-- Fin de Envoltorio -->

  <!-- Menu Toggle Script -->
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


    });
  </script>

  

</body>

</html>