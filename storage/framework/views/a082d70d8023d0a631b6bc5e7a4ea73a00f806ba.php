<?php $__env->startSection('styles'); ?>

<link href="<?php echo e(asset('css/asociacion_info.style.css')); ?>" rel="stylesheet" type="text/css">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid h-100">
    <div class="row align-items-center h-100">
        <div class="col-12 text-center">
            <h1 class="dog-title">
                <?php echo e($asociacion->nombre_asociacion); ?>

            </h1>
        </div>

        <div class="col-md-4 col-12 pb-3">
            <img src="<?php echo e(url('storage/'.$asociacion->imagen_asociacion)); ?>"
                class="img-thumbnail rounded-lg shadow imagen-perro p-0 m-0">
        </div>
        <div class="col-md-8 col-12 pr-3">
            <div class="row pb-3">
                <div class="col-md-4 col-sm-6 col-12">
                    <h4>Teléfono:</h4>
                    <li class="list-group-item bg-transparent rounded shadow">
                        <?php echo e($asociacion->telefono); ?>

                    </li>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <h4>Actividades:</h4>
                    <li class="list-group-item bg-transparent rounded shadow">
                        <?php echo e($asociacion->actividades); ?>

                    </li>
                </div>
            </div>
            <div class="row pb-3">
                <?php if(!is_null($asociacion->facebook) || !is_null($asociacion->twitter) || !is_null($asociacion->correo) || !is_null($asociacion->pag_web)): ?>
                    <div class="col">
                        <h4>Otros contactos:</h4>
                        <ul class="list-group">
                            <?php if(!is_null($asociacion->facebook)): ?>
                                <li class="list-group-item bg-transparent rounded shadow mb-1">
                                    <a href="<?php echo e($asociacion->facebook); ?>" class="text-primary stretched-link"><?php echo e($asociacion->facebook); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if(!is_null($asociacion->twitter)): ?>
                                <li class="list-group-item bg-transparent rounded shadow mb-1">
                                    <a href="<?php echo e($asociacion->twitter); ?>" class="text-primary stretched-link"><?php echo e($asociacion->twitter); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if(!is_null($asociacion->correo)): ?>
                                <li class="list-group-item bg-transparent rounded shadow mb-1">
                                    <a href="mailto:<?php echo e($asociacion->correo); ?>" class="text-primary stretched-link"><?php echo e($asociacion->correo); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if(!is_null($asociacion->pag_web)): ?>
                                <li class="list-group-item bg-transparent rounded shadow">
                                    <a href="<?php echo e($asociacion->pag_web); ?>" class="text-primary stretched-link"><?php echo e($asociacion->pag_web); ?></a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
            
            <div class="row pb-3">
                <div class="col">
                    <h4>Datos de donación:</h4>
                    <li class="list-group-item bg-transparent rounded shadow">
                        <?php echo e($asociacion->inf_donativos); ?>

                    </li>
                </div>
            </div>

            <br><br>
            <a href="<?php echo e(url()->previous()); ?>" class="btn logins-return">Regresar</a>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\loera\laravel\adopta_mi_perro\resources\views/asociacion_info.blade.php ENDPATH**/ ?>