<?php $__env->startSection('styles'); ?>

<link href="<?php echo e(asset('css/asociacion.style.css')); ?>" rel="stylesheet" type="text/css">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container h-100" id="page-container">

    <div class="row h-100 text-center">

        <div class="col-5 offset-1" id="main-title">
            <h1 class="text-white big-font">
                ¡Estamos para ayudarte!
            </h1>
        </div>

    </div>

    <?php if(count($asociaciones) > 0): ?>

    <div class="row" id="dog-list">

        <div class="col-10 offset-1 mb-3">
            <h1 class="list-title text-white text-center">Contactanos</h1>
            <?php $__currentLoopData = $asociaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asociacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="card mb-4 shadow mt-3">
                <div class="container dog-image rounded-lg"
                    style="background-image: url('storage/<?php echo e($asociacion->imagen_asociacion); ?>');">
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($asociacion->nombre_asociacion); ?></h5>
                    <p class="card-text"><?php echo e($asociacion->actividades); ?></p>
                    <a href="<?php echo e(url('asociacion/'.$asociacion->id)); ?>" class="btn logins">Más Informacion</a>
                </div>
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>


    </div>
    <?php else: ?>
    <div class="row" id="dog-list">

        <div class="col-10 offset-1 mb-3">
            <h1 class="list-title text-white text-center">Aún no hay asociaciones disponibles</h1>
        </div>
    </div>
    <?php endif; ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\loera\laravel\adopta_mi_perro\resources\views/asociacion.blade.php ENDPATH**/ ?>