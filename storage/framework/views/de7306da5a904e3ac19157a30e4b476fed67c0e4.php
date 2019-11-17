<?php $__env->startSection('styles'); ?>

<link href="<?php echo e(asset('css/adopcion.style.css')); ?>" rel="stylesheet" type="text/css" >

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
        <a href="<?php echo e(url('adopcion')); ?>" class="btn btn-xl logins">
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