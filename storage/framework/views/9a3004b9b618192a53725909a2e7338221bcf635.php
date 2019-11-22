<?php $__env->startSection('styles'); ?>

<link href="<?php echo e(asset('css/welcome.style.css')); ?>" rel="stylesheet" type="text/css">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('welcome'); ?>

<?php if(auth()->guard()->guest()): ?>
<?php else: ?>
<div id="left-item" class="text-left hello">
  ¡Bienvenido <?php echo e(Auth::user()->name); ?>!
</div>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container h-100">

  <div class="row h-100 justify-content-center">

    <div class="col-md-5 col-12 text-center" id="main-title">
      <h1>
        ¡Anímate!
      </h1>
      <h3>
        Y encuentra un nuevo mejor amigo
      </h3>
      <a href="<?php echo e(url('adoptar')); ?>" class="btn btn-xl logins">
        Búscalo ya
      </a>
    </div>
  </div>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\loera\laravel\adopta_mi_perro\resources\views/welcome.blade.php ENDPATH**/ ?>