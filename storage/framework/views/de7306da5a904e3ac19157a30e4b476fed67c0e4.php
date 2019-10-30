<?php $__env->startSection('styles'); ?>

#content {
    background: linear-gradient(rgba(22, 22, 22, 0.3), rgba(50, 50, 50, 1)), url('storage/stock/form_bg.jpg');
    /* background: url('storage/stock/main_bg.jpg'); */
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: scroll;
    background-size: cover;
}

#child-content {
  height: 100%;
}

#main-title {
  padding-top: 100px;
  opacity: 0.9; 
}

.big-font {
  font-size: 3rem;
}


body {
  background: #323232;
}

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container h-100" id="page-container">

  <div class="row h-100 text-center">

    <div class="col-5 offset-1" id="main-title">

        <h1 class="mt-4 text-white">¡Felicidades! Tu perro
            <?php echo e($nombre); ?>

            ahora esta en estado de adopción</h1>
        <p class="text-white">
            ¿Otro perro que quieras dar en adopción?
        </p>
        <a href="<?php echo e(url('adopcion')); ?>" class="btn logins">
            Haz clic aquí
        </a>
    </div>
  </div>

  <div class="row">
    <div class="col-8 offset-2">
        
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\loera\laravel\adopta_mi_perro\resources\views/adopcion.blade.php ENDPATH**/ ?>