<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Adopta mi Perro</title>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

  <script src="https://use.fontawesome.com/releases/v5.11.2/js/all.js" data-auto-replace-svg></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

  <link href="<?php echo e(asset('css/mystyles.css')); ?>" rel="stylesheet" type="text/css" >
  <?php echo $__env->yieldContent('styles'); ?>

  <style>
    <?php if(Request::url() === 'http://localhost:8000/adopcion'): ?>
      #adopcion {
        background: #fff;
      }

      #adopcion a {
        color: #000000;
        background: #fff;
      }
    <?php endif; ?>
    <?php if(Request::url() === 'http://localhost:8000/adoptar'): ?>
    #adoptar {
        background: #fff;
      }

      #adoptar a {
        color: #000000;
        background: #fff;
      }
    <?php endif; ?>
    <?php if(Request::url() === 'http://localhost:8000/asociacion'): ?>
    #asociacion {
        background: #fff;
      }

      #asociacion a {
        color: #000000;
        background: #fff;
      }
    <?php endif; ?>
  </style>


</head>

<body>

  <div class="wrapper">

    <nav id="sidebar">

      <div class="sidebar-header">
        <a href="<?php echo e(url('/')); ?>" class="d-block h-100">
          <i class="fas fa-dog fa-3x"></i>
          <h1>Adopta</h1>
          <h2>mi perro</h2>
        </a>
      </div>

      <div class="sidebar-subheader">
        <p>Conoce tu perro ideal</p>
        <?php echo e(Request::url()); ?>

      </div>

      <ul class="list-unstyled components">
        <li id="adopcion">
        <a href="<?php echo e(url('adopcion')); ?>">Da en Adopción</a>
        </li>
        <li id="adoptar">
          <a href="<?php echo e(url('adoptar')); ?>">Adopta</a>
        </li>
        <li id="asociacion">
          <a href="<?php echo e(url('asociacion')); ?>">Asociaciones</a>
        </li>
      </ul>

    </nav>
    
    <div id="content">
      
      <nav class="navbar navbar-default navbar-fixed-top" id="topbar">

        <button type="button" id="sidebarCollapse" class="btn btn-circle nav-item">
            <i class="fas fa-align-left"></i>
        </button>

        <?php if(auth()->guard()->guest()): ?>
          <div id="right-item">
            <a class="btn btn-sm logins" href="<?php echo e(route('login')); ?>">Inicia Sesión</a>
            <a class="btn btn-sm logins" href="<?php echo e(route('register')); ?>">Crear cuenta</a>
          </div>
        <?php else: ?>
          <div id="left-item" class="text-left hello">
            ¡Bienvenido <?php echo e(Auth::user()->name); ?>!
          </div>
          <div id="right-item">
            <a class="btn btn-sm logins" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Cerrar sesión</a>
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                <?php echo csrf_field(); ?>
            </form>
          </div>

        <?php endif; ?>

      </nav>

      <div id="child-content">
        <?php echo $__env->yieldContent('content'); ?>
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


    });
  </script>

</body>

</html><?php /**PATH C:\Users\loera\laravel\adopta_mi_perro\resources\views/main.blade.php ENDPATH**/ ?>