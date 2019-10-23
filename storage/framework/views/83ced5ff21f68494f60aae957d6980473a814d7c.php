<?php $__env->startSection('content'); ?>

<div class="container-fluid">
  
  <?php if(count($perros) > 0): ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                Perros en adopcion
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Perro</th>
                        <th>Decripcion</th>
                        <th>Imagen</th>
                        <th></th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        <?php $__currentLoopData = $perros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $perro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div><?php echo e($perro->nombre_perro); ?></div>
                                </td>

                                <td>
                                    <div><?php echo e($perro->descripcion_perro); ?></div>
                                </td>
                                <td>
                                    <img src="<?php echo e(url('storage/'.$perro->imagen_perro)); ?>" style="width: 100px;">
                                </td>
                                <td>
                                <a class="btn btn-primary" href="<?php echo e(url('adoptar/'.$perro->id)); ?>">Mas informacion</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php else: ?>
        <div class="panel panel-default">
            <h3>Aun no hay perro en adopcion viejo.</h3>
        </div>
    <?php endif; ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\franc\Documents\septimo_semestre\TSP\doggos\resources\views/adoptar.blade.php ENDPATH**/ ?>