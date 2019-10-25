<?php $__env->startSection('styles'); ?>

.dog-image {
    width: 100%;
    height: 200px;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: scroll;
    background-size: cover;
}

.card {
    background: #D6FADF;
}

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
  
  <?php if(count($perros) > 0): ?>

        <div class="row">

            <div class="col-10 offset-1">
                <?php $__currentLoopData = $perros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $perro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                    <div class="card mb-3 shadow">
                        <div class="container dog-image rounded-lg" style="background-image: url('storage/<?php echo e($perro->imagen_perro); ?>');">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($perro->nombre_perro); ?></h5>
                            <p class="card-text"><?php echo e($perro->descripcion_perro); ?></p>
                            <a href="<?php echo e(url('adoptar/'.$perro->id)); ?>" class="btn btn-primary">Mas Informacion</a>
                        </div>
                    </div>
    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>


        </div>
    <?php else: ?>
        
    <?php endif; ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\loera\laravel\adopta_mi_perro\resources\views/adoptar.blade.php ENDPATH**/ ?>