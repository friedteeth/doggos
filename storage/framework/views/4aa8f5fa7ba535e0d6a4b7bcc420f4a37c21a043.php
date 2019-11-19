<?php $__env->startSection('styles'); ?>

<link href="<?php echo e(asset('css/form_adopcion.style.css')); ?>" rel="stylesheet" type="text/css">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container h-100" id="page-container">

    <div class="row h-100 text-center">

        <div class="col-5 offset-1" id="main-title">

            <h1 class="text-white big-font">
                ¡Te podemos ayudar!
            </h1>

        </div>
    </div>

    <div class="row">
        <div class="col-8 offset-2">
            <h1 class="list-title text-white text-center">Llena tus datos y los del perro</h1>
            <form action="<?php echo e(url('adopcion')); ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                <?php echo $__env->make('common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <br>
                <div class="card rounded-lg shadow">
                    <div class="card-header">
                        <h3>Datos Personales</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="motivo" class="col-md-4 col-form-label text-md-right text-dark">Motivo por el
                                que se da en adopción:</label>

                            <div class="col-md-6">
                                <textarea name="motivo" id="motivoAdopcion"
                                    class="form-control <?php $__errorArgs = ['motivo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required rows="3"
                                    autofocus></textarea>

                                <?php $__errorArgs = ['motivo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>


                    </div>
                </div>
                <br>
                <div class="card rounded-lg shadow">
                    <div class="card-header">
                        <h3>Datos de Contacto</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="telefono_dueno"
                                class="col-md-4 col-form-label text-md-right text-dark">Teléfono:</label>

                            <div class="col-md-6">
                                <input type="text" name="telefono_dueno" id="telefono_dueno"
                                    class="form-control  <?php $__errorArgs = ['telefono_dueno'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    value="<?php echo e(Auth::user()->telefono); ?>" required autofocus>

                                <?php $__errorArgs = ['telefono_dueno'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="requisito"
                                class="col-md-4 col-form-label text-md-right text-dark">Requisitos para adopción:</label>

                            <div class="col-md-6">
                                <textarea name="requisito" id="requisito"
                                    class="form-control <?php $__errorArgs = ['requisito'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required rows="3"
                                    autofocus></textarea>

                                <?php $__errorArgs = ['requisito'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card rounded-lg shadow">
                    <div class="card-header">
                        <h3>Datos del Perro</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="nombre_perro"
                                class="col-md-4 col-form-label text-md-right text-dark">Nombre:</label>

                            <div class="col-md-6">
                                <input type="text" name="nombre_perro" id="nombre_perro"
                                    class="form-control  <?php $__errorArgs = ['nombre_perro'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="" required
                                    autofocus>

                                <?php $__errorArgs = ['nombre_perro'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="descripcion_color"
                                class="col-md-4 col-form-label text-md-right text-dark">Descripción de colores:</label>

                            <div class="col-md-6">
                                <textarea name="descripcion_color" id="descripcion_color" rows="3"
                                    class="form-control <?php $__errorArgs = ['motivo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required
                                    autofocus></textarea>

                                <?php $__errorArgs = ['descripcion_color'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="complexion"
                                class="col-md-4 col-form-label text-md-right text-dark">Complexión:</label>

                            <div class="col-md-6">
                                <select class="custom-select" name="complexion" id="complexion">
                                    <option value="Pequeño ancho">Pequeño ancho</option>
                                    <option value="Pequeño delgado">Pequeño delgado</option>
                                    <option value="Pequeño">Pequeño</option>
                                    <option value="Mediano ancho">Mediano ancho</option>
                                    <option value="Mediano delgado">Mediano delgado</option>
                                    <option value="Mediano">Mediano</option>
                                    <option value="Grande ancho">Grande ancho</option>
                                    <option value="Grande delgado">Grande delgado</option>
                                    <option value="Grande">Grande</option>
                                </select>

                                <?php $__errorArgs = ['complexion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="edad" class="col-md-4 col-form-label text-md-right text-dark">Edad en
                                meses:</label>

                            <div class="col-md-6">
                                <input type="number" name="edad" id="edad"
                                    class="form-control  <?php $__errorArgs = ['edad'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required autofocus min="1"
                                    max="360">

                                <?php $__errorArgs = ['edad'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="row form-group justify-content-center">
                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="esterilizado" id="esterilizado"
                                    class="form-control form-check-input <?php $__errorArgs = ['esterilizado'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    autofocus>
                                <label for="esterilizado" class="text-dark form-check-label">Esterilizado</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="desparasitado" id="desparasitado"
                                    class="form-control form-check-input <?php $__errorArgs = ['desparasitado'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    autofocus>
                                <label for="desparasitado" class="text-dark form-check-label">Desparasitado</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="vacunado" id="vacunado"
                                    class="form-control form-check-input <?php $__errorArgs = ['vacunado'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    autofocus>
                                <label for="vacunado" class="text-dark form-check-label">Vacunado</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="genero" class="col-md-4 col-form-label text-md-right text-dark">Género:</label>

                            <div class="col-md-6">
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="genero" id="genero_m"
                                        class="form-check-input form-control <?php $__errorArgs = ['genero'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        value="Macho" required autofocus checked>
                                    <label class="form-check-label" for="genero_m">
                                        Macho
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="genero" id="genero_h"
                                        class="form-check-input form-control <?php $__errorArgs = ['genero'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        value="Hembra" required autofocus>
                                    <label class="form-check-label" for="genero_h">
                                        Hembra
                                    </label>
                                </div>

                                <?php $__errorArgs = ['genero'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="otros_detalles" class="col-md-4 col-form-label text-md-right text-dark">Otros
                                detalles:</label>

                            <div class="col-md-6">
                                <textarea name="otros_detalles" id="otros-detalles"
                                    class="form-control <?php $__errorArgs = ['otros_detalles'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    rows="3"></textarea>

                                <?php $__errorArgs = ['otros_detalles'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="comportamiento"
                                class="col-md-4 col-form-label text-md-right text-dark">Comportamiento:</label>

                            <div class="col-md-6">
                                <textarea name="comportamiento" id="comportamiento"
                                    class="form-control <?php $__errorArgs = ['comportamiento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    rows="3"></textarea>

                                <?php $__errorArgs = ['comportamiento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="imagen_perro"
                                class="col-md-4 col-form-label text-md-right text-dark">Imagen:</label>

                            <div class="col-md-6">
                                <div class="custom-file">
                                    <input type="file" name="imagen_perro" id="imagen-perro"
                                        class="custon-file-input <?php $__errorArgs = ['comportamiento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                </div>

                                <?php $__errorArgs = ['imagen_perro'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                    </div>
                </div>
                <br>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-xl logins shadow">
                        Dar en adopción
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\loera\laravel\adopta_mi_perro\resources\views/form_adopcion.blade.php ENDPATH**/ ?>