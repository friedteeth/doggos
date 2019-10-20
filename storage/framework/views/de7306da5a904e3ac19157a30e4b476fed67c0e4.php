<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <h1 class="mt-4">¡Felicidades! Tu perro
            <?php echo e($nombre); ?>

            ahora esta en estado de adopcion</h1>
        <p>
            Solo falta esperar y ver si alguien quiere tu chingadera.
        </p>
        <p>
            Otro perro que quieras dar en adopcion?
        </p>
        <form action="/form_adopcion">
            <button type="submit" class="btn btn-dark"> 
                Haz click aqui
            </button>
        </form>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\loera\laravel\adopta_mi_perro\resources\views/adopcion.blade.php ENDPATH**/ ?>