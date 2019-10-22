<?php $__env->startSection('content'); ?>

<div class="container-fluid">
  
  
        <div class="panel panel-default">
            <div class="panel-heading">
                Este es un perro unico
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Perro</th>
                        <th>Decripcion</th>
                        <th>Imagen</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
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
                            </tr>
                    </tbody>
                </table>
                <a href="" class="btn btn-primary">Conocelo Ahora!</a>
                <div>
                    <h2>Informacion de contacto:</h2>
                    <h4><?php echo e($adopcion->telefono_dueno); ?></h4>
                    <h2>Nombre:</h2>
                    <p>
                    <?php echo e($adopcion->nombre_dueno); ?>

                    <?php echo e($adopcion->apellidos_dueno); ?>

                </p>
                </div>
            </div>
        </div>
    

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\loera\laravel\adopta_mi_perro\resources\views/adoptar_perro.blade.php ENDPATH**/ ?>