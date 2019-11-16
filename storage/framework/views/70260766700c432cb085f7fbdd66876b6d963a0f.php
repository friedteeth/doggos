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
            <img src="<?php echo e(url('storage/'.$perro->imagen_perro)); ?>" class="img-thumbnail rounded-lg shadow imagen-perro p-0 m-0">
        </div>
        <div class="col-7">
            <h1>Conoce más sobre <?php echo e($perro->nombre_perro); ?></h1>
            <?php echo e($perro->nombre_perro); ?>

            <?php echo e($perro->descripcion_perro); ?>

            <br><br>
            <a href="<?php echo e(url()->previous()); ?>" class="btn logins-return">Regresar</a>
            <button type="button" class="btn logins" data-toggle="modal" data-target="#exampleModal">
                ¡Adóptame!
            </button>
        </div>

        <div class="modal fade h-100" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Información del dueño</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h3>Nombre:</h3>
                        <p>
                            <?php echo e($adopcion->nombre_dueno); ?>

                            <?php echo e($adopcion->apellidos_dueno); ?>

                        </p>
                        <h3>Teléfono:</h3>
                        <p><?php echo e($adopcion->telefono_dueno); ?></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary text-center" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\loera\laravel\adopta_mi_perro\resources\views/adoptar_perro.blade.php ENDPATH**/ ?>