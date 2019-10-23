<?php $__env->startSection('content'); ?>

<div class="container-fluid">

    
  <?php echo $__env->make('common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <form action="/adopcion" method="post" class="form-horizontal" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>


    <div class="form-group row">
      <div class="col">
        <h2>Informacion tuya</h2>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre_dueno" id="nombre-dueno" class="form-control">
        <label for="nombre">Apellidos:</label>
        <input type="text" name="apellidos_dueno" id="apellidos-dueno" class="form-control">
        <label for="nombre">Telefono:</label>
        <input type="text" name="telefono_dueno" id="telefono-dueno" class="form-control">
        <label for="nombre">Motivo:</label>
        <input type="text" name="motivo" id="motivo" class="form-control">
      </div>
      <div class="col">
        <h2>Informacion del perro</h2>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre_perro" id="nombre-perro" class="form-control">
        <label for="descripcion">Descripcion:</label>
        <input type="text" name="descripcion_perro" id="descripcion-perro" class="form-control">
        <label for="imagen">Imagen:</label>
        <input type="file" name="imagen_perro" id="imagen-perro" class="form-control">
      </div>
    </div>

    <div class="form-gorup">
      <button type="submit" class="btn btn-dark">
        Dar en adopcion
      </button>
    </div>

  </form>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\franc\Documents\septimo_semestre\TSP\doggos\resources\views/form_adopcion.blade.php ENDPATH**/ ?>