<?php $__env->startSection('styles'); ?>

<link href="<?php echo e(asset('css/adoptar.style.css')); ?>" rel="stylesheet" type="text/css">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container h-100" id="page-container">

    <div class="row h-100 justify-content-center">

        <div class="col-md-5 col-12 text-center" id="main-title">
            <h1 class="text-white big-font">
                ¡Encontremos a tu nuevo amigo!
            </h1>
        </div>

    </div>

    <?php if(count($perros) > 0): ?>

    <div class="row justify-content-center" id="dog-list">

        <div class="col-md-10 col-12 mb-3">
            <p class="text-white low-title text-center">Un perro para todos</p>
            <?php $__currentLoopData = $perros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $perro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="card mb-4 shadow mt-3">
                <div class="container dog-image rounded-lg"
                    style="background-image: url('storage/<?php echo e($perro->imagen_perro); ?>');">
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($perro->nombre_perro); ?></h5>
                    <p class="card-text"><?php echo e($perro->comportamiento); ?></p>
                    <a href="<?php echo e(url('adoptar/'.$perro->id)); ?>" class="btn logins">Más Información</a>
                </div>
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>


    </div>
    <?php else: ?>
    <div class="row" id="dog-list">

        <div class="col-md-10 col-12 mb-3">
            <h1 class="list-title text-white text-center">Aún no hay perros disponibles</h1>
        </div>
    </div>
    <?php endif; ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\loera\laravel\adopta_mi_perro\resources\views/adoptar.blade.php ENDPATH**/ ?>