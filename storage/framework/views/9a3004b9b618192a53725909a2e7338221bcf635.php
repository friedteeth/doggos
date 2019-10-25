<?php $__env->startSection('styles'); ?>

#content {
  background: linear-gradient(rgba(22, 22, 22, 0.1), rgba(22, 22, 22, 1)), url('storage/stock/main_bg.jpg');
  /* background: url('storage/stock/main_bg.jpg'); */
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-size: cover;
}

#child-content {
  color: white;
  height: 100%;
}

#main-title {
  padding-top: 210px;
  opacity: 0.7;
}

.title-font {
  color: white;
  font-size: 3rem;
}



<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container h-100">

  <div class="row h-100">
  
    <div class="col-5 offset-1 text-center" id="main-title">
      <h1>
        ¡Animate!
      </h1>
      <h3>
        Y encuentra un nuevo mejor amigo
      </h3>
      <a href="<?php echo e(url('adoptar')); ?>" class="btn btn-xl logins">
        Buscalo ya
      </a>
    </div>
  </div>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\loera\laravel\adopta_mi_perro\resources\views/welcome.blade.php ENDPATH**/ ?>