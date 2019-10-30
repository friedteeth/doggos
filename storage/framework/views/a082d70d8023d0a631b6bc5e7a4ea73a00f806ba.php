<?php $__env->startSection('styles'); ?>

#child-content {
    height: 100%;
    background: #EEEEEE;
}

.modal {
    text-align: center;
}

.modal-open {
    overflow: hidden;
}

.modal-dialog {
    display: inline-block;
    text-align: left;
    vertical-align: middle;
}

.imagen-perro {
    width: 100%;
    height: 100%;
}

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container h-100">
    <div class="row align-items-center h-100">
    
        <div class="col-5">
            <img src="<?php echo e(url('storage/'.$asociacion->imagen_asociacion)); ?>" class="img-thumbnail rounded-lg shadow imagen-perro p-0 m-0">
        </div>
        <div class="col-7">
            <h1>Conoce más sobre <?php echo e($asociacion->nombre_asociacion); ?></h1>
            <?php echo e($asociacion->nombre_asociacion); ?>

            <?php echo e($asociacion->desc_asociacion); ?>

            <br><br>
            <a href="<?php echo e(url()->previous()); ?>" class="btn logins-return">Regresar</a>
        </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\loera\laravel\adopta_mi_perro\resources\views/asociacion_info.blade.php ENDPATH**/ ?>