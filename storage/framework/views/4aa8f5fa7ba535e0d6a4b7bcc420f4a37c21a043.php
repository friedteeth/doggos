<?php $__env->startSection('content'); ?>

<div class="container-fluid">

    
  <?php echo $__env->make('common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <form action="/adopcion" method="post" class="form-horizontal">
    <?php echo e(csrf_field()); ?>


    <div class="form-group">
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" id="nombre-perro" class="form-control">
      <label for="descripcion">Descripcion</label>
      <input type="text" name="descripcion" id="descripcion-perro" class="form-control">
    </div>

    <div class="form-gorup">
      <button type="submit" class="btn btn-dark">
        Dar en adopcion
      </button>
    </div>

  </form>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\loera\laravel\adopta_mi_perro\resources\views/form_adopcion.blade.php ENDPATH**/ ?>