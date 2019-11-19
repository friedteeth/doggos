<?php $__env->startSection('styles'); ?>

<link href="<?php echo e(asset('css/adoptar_perro.style.css')); ?>" rel="stylesheet" type="text/css">
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid h-100">
    <div class="row align-items-center h-100">
        <div class="col-12 text-center">
            <h1>Conoce más sobre </h1>
            <h1 class="dog-title">
                <?php echo e($perro->nombre_perro); ?>

            </h1>
        </div>

        <div class="col-4">
            <img src="<?php echo e(url('storage/'.$perro->imagen_perro)); ?>"
                class="img-thumbnail rounded-lg shadow imagen-perro p-0 m-0">
        </div>
        <div class="col-8 pr-3">
            <div class="row pb-3">
                <div class="col-4">
                    <h4>Complexión:</h4>
                    <li class="list-group-item bg-transparent rounded shadow">
                        <?php echo e($perro->complexion); ?>

                    </li>
                </div>
                <div class="col-8">
                    <h4>Descripción de colores:</h4>
                    <li class="list-group-item bg-transparent rounded shadow">
                        <?php echo e($perro->descripcion_color); ?>

                    </li>
                </div>
            </div>
            <div class="row pb-3">
                <?php if($perro->esterilizado == 1 || $perro->vacunado == 1 || $perro->desparasitado == 1): ?>
                    <div class="col">
                        <h4>Estado:</h4>
                        <ul class="list-group">
                            <?php if($perro->esterilizado == 1): ?>
                                <li class="list-group-item bg-transparent rounded shadow mb-1">
                                    Esterilizado
                                </li>
                            <?php endif; ?>
                            <?php if($perro->desparasitado == 1): ?>
                                <li class="list-group-item bg-transparent rounded shadow mb-1">
                                    Desparacitado
                                </li>
                            <?php endif; ?>
                            <?php if($perro->vacunado == 1): ?>
                                <li class="list-group-item bg-transparent rounded shadow">
                                    Vacunado
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <div class="col">
                    <h4>Edad:</h4>
                    <li class="list-group-item bg-transparent rounded shadow">
                        <?php echo e($perro->edad); ?> meses
                    </li>
                </div>
                <div class="col">
                    <h4>Género:</h4>
                    <li class="list-group-item bg-transparent rounded shadow">
                        <?php echo e($perro->genero); ?>

                    </li>
                </div>
            </div>
            <div class="row pb-3">
                <div class="col">
                    <h4>Comportamiento:</h4>
                    <li class="list-group-item bg-transparent rounded shadow">
                        <?php echo e($perro->comportamiento); ?>

                    </li>
                </div>
                <div class="col">
                    <h4>Otros detalles:</h4>
                    <li class="list-group-item bg-transparent rounded shadow">
                        <?php echo e($perro->otros_detalles); ?>

                    </li>
                </div>
            </div>
            

            <br><br>
            <a href="<?php echo e(url()->previous()); ?>" class="btn logins-return">Regresar</a>
            <button type="button" class="btn logins" data-toggle="modal" data-target="#mod">
                ¡Adóptame!
            </button>
        </div>

        <div class="modal fade h-100" id="mod" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <?php if(auth()->guard()->guest()): ?>
                    <div class="modal-header info-title">
                        <h2 class="modal-title text-white" id="exampleModalLabel">Espera un momento...</h2>
                        
                    </div>
                    <div class="modal-body">
                        <h5>Debes estar registrado para conocer información de adopción.</h5>
                    </div>
                    <div class="modal-footer">
                        <a href="<?php echo e(route('login')); ?>" class="btn btn-primary">Iniciar sesión</a>
                        <a href="<?php echo e(route('register')); ?>" class="btn btn-primary">Crear cuenta</a>
                        <button data-dismiss="modal" type="button" class="btn logins-return">Cerrar</button>
                    </div>
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Espera un momento...</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                    <div class="modal-footer">
                        <a href="<?php echo e(route('login')); ?>" class="btn btn-primary">Iniciar sesión</a>
                        <a href="<?php echo e(route('register')); ?>" class="btn btn-primary">Crear cuenta</a>
                        <button type="button" class="btn btn-secondary text-center" data-dismiss="modal">Cerrar</button>
                    </div>
                    <?php else: ?>
                        <?php if($terms == 1): ?>    
                        <div class="modal-header info-title">
                            <h2 class="modal-title text-white" id="exampleModalLabel">Información de contacto</h2>
                            
                        </div>
                        <div class="modal-body">
                            <h5>Nombre del dueño:</h5>
                            <li class="list-group-item bg-transparent rounded shadow mb-3">
                                <?php echo e($dueno); ?>

                            </li>
                            <h5>Teléfono:</h5>
                            <li class="list-group-item bg-transparent rounded shadow">
                                <?php echo e($adopcion->telefono_dueno); ?>

                            </li>
                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" type="button" class="btn logins-return">Cerrar</button>
                        </div>
                        <?php else: ?>
                        <div class="modal-header info-title">
                            <h2 class="modal-title text-white" id="exampleModalLabel">Términos y condiciones</h2>
                            
                        </div>
                        <div class="modal-body">
                            <p>
                                Antes de continuar con el procesos de adopción...
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sit amet dui imperdiet, semper purus vitae, bibendum tortor. Suspendisse pellentesque diam lectus, ac malesuada mi dignissim sed. Nunc eu leo vehicula, fermentum lectus at, efficitur orci. Suspendisse varius magna ac nisl euismod, eu efficitur orci scelerisque. Vestibulum nec odio et nulla dapibus fermentum euismod sed ante. Aenean sit amet pulvinar eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                            </p>
                            <p>
                                Cras lacus nisl, porttitor et arcu ut, sodales dapibus nibh. Vivamus semper metus nec justo ultricies, ut sodales eros commodo. Vivamus ultricies, ex sit amet dignissim vestibulum, justo dolor sagittis lacus, eu placerat est justo quis nunc. Nam lobortis ex neque, eget efficitur eros sagittis ut. Cras porta velit nulla, vel finibus felis porta et. Nullam semper luctus pretium. Aliquam venenatis tellus eu ante fringilla, sed fringilla magna fringilla. Fusce laoreet a neque sit amet tincidunt. Fusce placerat pretium arcu et vulputate. Praesent rutrum sem in odio pharetra, eget dignissim nisl vehicula. Aenean at ligula quis nulla blandit cursus dapibus sit amet sapien. Praesent aliquam et nunc non vestibulum. Vestibulum ultrices mauris at nisl ultrices molestie. Donec aliquet cursus ultricies. Donec eget justo eget mauris posuere tempus. Quisque vitae orci venenatis, varius elit sed, venenatis nisl.
                            </p>
                            <p>
                                Praesent fermentum lacus urna, in iaculis dui malesuada non. Nunc accumsan quam et sagittis luctus. Aliquam in varius odio. Quisque sodales sapien et euismod vulputate. Morbi efficitur libero vitae nulla sollicitudin, vel luctus neque facilisis. Nam quis ligula blandit, consectetur elit eget, convallis nunc. Sed sit amet arcu est. In non diam in ligula fringilla euismod. Sed pellentesque tortor sit amet convallis euismod. Cras tempor nulla egestas arcu vulputate laoreet. Ut purus ante, pretium vitae magna ut, tristique pulvinar sapien. In accumsan leo vitae neque volutpat consequat. Proin turpis felis, vulputate non tellus suscipit, hendrerit vehicula elit. Nunc at tincidunt nibh.
                            </p>
                            <p>
                                Sed auctor faucibus suscipit. Nunc ultricies non est ut porttitor. In urna neque, lobortis id condimentum quis, tempor a mauris. Integer suscipit, sem sit amet laoreet consectetur, sapien dui luctus dui, vitae pretium justo felis non ex. Nulla facilisi. Quisque convallis metus id felis dignissim, vitae aliquam lectus tristique. Nam maximus elementum pretium. Aenean imperdiet leo vel vulputate semper. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent ac orci libero.
                            </p>
                            <div class="row border border-dark mr-5 ml-5 pt-2 pb-2 text-center">
                                <div class="col-1 ">
                                    <input type="checkbox" id="terms" name="terms" onload="disable()" onchange="check()" autocomplete="off">
                                </div>
                                <div class="col-11 terms-sm-text">
                                    He leído y acepto los términos y condiciones de uso
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" type="button" class="btn logins-return">Cerrar</button>
                            <form action="<?php echo e(url('aceptar_terminos')); ?>" method="POST">
                                <?php echo e(csrf_field()); ?>

                                <button type="submit" class="btn logins disabled" id="continuar-terms" disabled>Continuar</button>
                            </form>
                        </div>
                        <?php endif; ?>

                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>

</div>

<script>
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    
    function check() {
        if($("#terms").is(':checked')){
            console.log('it got checked')
            $("#continuar-terms").removeClass('disabled');
            $("#continuar-terms").prop('disabled', false);
        } else {
            console.log('it got unchecked')
            $("#continuar-terms").addClass('disabled');
            $("#continuar-terms").prop('disabled', true);
        }
    }

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\loera\laravel\adopta_mi_perro\resources\views/adoptar_perro.blade.php ENDPATH**/ ?>