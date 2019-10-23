<?php $__env->startSection('content'); ?>

<div class="container-fluid">
  <h1 class="mt-4">Ver lista de asociaciones</h1>
</div>
<div class="panel-body">
    <table class="table table-striped task-table">

        <!-- Table Headings -->
        <thead>
            <th>Nombre</th>
            <th>Decripcion</th>
            <th>Imagen</th>
            <th></th>
        </thead>
<!-- Table Body -->
<tbody>
  <?php $__currentLoopData = $asociacion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asociacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
          <!-- Task Name -->
          <td class="table-text">
              <div><?php echo e($asociacion->nombre_asociacion); ?></div>
          </td>
          <td>
              <div><?php echo e($asociacion->desc_asociacion); ?></div>
          </td>
          <td>
              <img src="/storage/app/public/asociaciones/imagenes/DogLove.jpg" width="80" height="80">
              <img src=<?php echo e(asset('asociacioes/imagenes/2.png')); ?> alt="">
             <!-- <img src="<?php echo e(url('storage/'.$asociacion->imagen_asociacion)); ?>" style="width: 100px;"> -->
          </td>
          <td>
          <a class="btn btn-primary" href="<?php echo e(url('asociacion/'.$asociacion->id)); ?>">Mas informacion</a>
          </td>
      </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\franc\Documents\septimo_semestre\TSP\doggos\resources\views/asociacion.blade.php ENDPATH**/ ?>