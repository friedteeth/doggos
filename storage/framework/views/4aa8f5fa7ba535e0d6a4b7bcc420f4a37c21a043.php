<?php $__env->startSection('scripts'); ?>

<script src="<?php echo e(asset('js/form_adopcion.js')); ?>"></script>
<script src="<?php echo e(asset('js/bs-custom-file-input.min.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>

<link href="<?php echo e(asset('css/form_adopcion.style.css')); ?>" rel="stylesheet" type="text/css">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container h-100" id="page-container">

    <div class="row h-100 justify-content-center">

        <div class="col-md-5 col-12 text-center" id="main-title">

            <h1 class="text-white big-font">
                ¡Te podemos ayudar!
            </h1>

        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-10 col-12">
            <p class="text-white low-title text-center">Llena tus datos y los datos de tu perro</p>
            <p class="text-warning text-center">Todos campos con un asterisco (*), son obligatorios</p>
            <form action="<?php echo e(url('adopcion')); ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                <br>
                
                <div class="card rounded-lg shadow">
                    <div class="card-header">
                        <h3>Datos Personales</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="motivo" class="col-md-3 col-form-label text-md-right text-dark">*Motivo por el
                                que se da en adopción:</label>

                            <div class="col-md-6">
                                <textarea name="motivo" id="motivoAdopcion" class="form-control 
                                <?php if(session('err')): ?>
                                    <?php if($errors->has('motivo')): ?>
                                        is-invalid
                                    <?php else: ?>
                                        is-valid
                                    <?php endif; ?>
                                <?php endif; ?>
                                " 
                                <?php if(session('err') && $errors->has('motivo')): ?>
                                    autofocus
                                <?php endif; ?>
                                rows="3"><?php echo e(old('motivo') ? old('motivo') : ''); ?></textarea>
                            </div>

                            <div class="col-md-3">
                                <small class="text-muted">
                                    Maximo 500 caracteres.
                                </small>
                            </div>

                            <?php $__errorArgs = ['motivo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="col-md-6 offset-3 text-danger"><?php echo e($message); ?></div>
                                <div class="col-md-3"></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                                class="col-md-3 col-form-label text-md-right text-dark">*Teléfono:</label>

                            <div class="col-md-6">
                                <input type="text" name="telefono_dueno" id="telefono_dueno"
                                    class="form-control
                                    <?php if(session('err')): ?>
                                        <?php if($errors->has('telefono_dueno')): ?>
                                            is-invalid
                                        <?php else: ?>
                                            is-valid
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    "
                                    <?php if(session('err')): ?>
                                        value="<?php echo e(old('telefono_dueno')); ?>"
                                        <?php if($errors->has('telefono_dueno')): ?>
                                            autofocus
                                        <?php endif; ?>
                                    <?php else: ?>
                                        value="<?php echo e(Auth::user()->telefono); ?>"
                                    <?php endif; ?>>
                            </div>

                            <div class="col-md-3">
                                <small class="text-muted">
                                    Debe tener 10 digitos.
                                </small>
                            </div>

                            <?php $__errorArgs = ['telefono_dueno'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="col-md-6 offset-3 text-danger"><?php echo e($message); ?></div>
                                <div class="col-md-3"></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        
                        
                        <div class="form-group row">
                            <label for="requisito"
                                class="col-md-3 col-form-label text-md-right text-dark">Requisitos para adopción:</label>

                            <div class="col-md-6">
                                <textarea name="requisito" id="requisito" value="<?php echo e(old('requisito')); ?>" class="form-control
                                <?php if(session('err')): ?>
                                    <?php if($errors->has('requisito')): ?>
                                        is-invalid
                                    <?php else: ?>
                                        is-valid
                                    <?php endif; ?>
                                <?php endif; ?>
                                "
                                <?php if(session('err') && $errors->has('requisito')): ?>
                                    autofocus
                                <?php endif; ?>
                                rows="3"><?php echo e(old('requisito') ? old('requisito') : ''); ?></textarea>
                            </div>

                            <div class="col-md-3">
                                <small class="text-muted">
                                    Maximo 500 caracteres.
                                </small>
                            </div>

                            <?php $__errorArgs = ['requisito'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="col-md-6 offset-3 text-danger"><?php echo e($message); ?></div>
                                <div class="col-md-3"></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                                class="col-md-3 col-form-label text-md-right text-dark">Nombre:</label>

                            <div class="col-md-6">
                                <input type="text" name="nombre_perro" id="nombre_perro" class="form-control
                                <?php if(session('err')): ?>
                                    <?php if($errors->has('nombre_perro')): ?>
                                        is-invalid
                                    <?php else: ?>
                                        is-valid
                                    <?php endif; ?>
                                <?php endif; ?>
                                " 
                                <?php if(session('err') && $errors->has('nombre_perro')): ?>
                                    autofocus
                                <?php endif; ?>
                                 value="<?php echo e(old('nombre_perro')); ?>">
                            </div>

                            <div class="col-md-3">
                                <small class="text-muted">
                                    Maximo 20 caracteres.
                                </small>
                            </div>

                            <?php $__errorArgs = ['nombre_perro'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="col-md-6 offset-3 text-danger"><?php echo e($message); ?></div>
                                <div class="col-md-3"></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        
                        
                        <div class="form-group row">
                            <label for="descripcion_color"
                                class="col-md-3 col-form-label text-md-right text-dark">*Descripción de colores:</label>

                            <div class="col-md-6">
                                <textarea name="descripcion_color" id="descripcion_color" rows="3" class="form-control
                                <?php if(session('err')): ?>
                                    <?php if($errors->has('descripcion_color')): ?>
                                        is-invalid
                                    <?php else: ?>
                                        is-valid
                                    <?php endif; ?>
                                <?php endif; ?>
                                " 
                                <?php if(session('err') && $errors->has('descripcion_color')): ?>
                                    autofocus
                                <?php endif; ?>><?php echo e(old('descripcion_color') ? old('descripcion_color') : ''); ?></textarea>
                            </div>

                            <div class="col-md-3">
                                <small class="text-muted">
                                    Maximo 100 caracteres.
                                </small>
                            </div>

                            <?php $__errorArgs = ['descripcion_color'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="col-md-6 offset-3 text-danger"><?php echo e($message); ?></div>
                                <div class="col-md-3"></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        
                        
                        <div class="form-group row">
                            <label for="complexion"
                                class="col-md-3 col-form-label text-md-right text-dark">*Complexión:</label>

                            <div class="col-md-6">
                                <select class="custom-select" name="complexion" id="complexion" >
                                    <option value="Pequeño"
                                    <?php if(old('complexion') === 'Pequeño'): ?>
                                        selected
                                    <?php endif; ?>
                                    >Pequeño</option>
                                    <option value="Mediano"
                                    <?php if(old('complexion') === 'Mediano'): ?>
                                        selected
                                    <?php endif; ?>
                                    >Mediano</option>
                                    <option value="Grande"
                                    <?php if(old('complexion') === 'Grande'): ?>
                                        selected
                                    <?php endif; ?>
                                    >Grande</option>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <small class="text-muted">
                                    Selecciona la complexión de tu perro.
                                </small>
                            </div>
                        </div>
                        
                        
                        <div class="form-group row">
                            <label for="edad" class="col-md-3 col-form-label text-md-right text-dark">Edad en
                                meses:</label>

                            <div class="col-md-6">
                                <input type="number" name="edad" id="edad" class="form-control
                                <?php if(session('err')): ?>
                                    <?php if($errors->has('edad')): ?>
                                        is-invalid
                                    <?php else: ?>
                                        is-valid
                                    <?php endif; ?>
                                <?php endif; ?>
                                " 
                                <?php if(session('err') && $errors->has('edad')): ?>
                                    autofocus
                                <?php endif; ?>
                                 value="<?php echo e(old('edad')); ?>" min="1" max="180">
                            </div>

                            <div class="col-md-3">
                                <small class="text-muted">
                                    Edad maxima es de 180 meses.
                                </small>
                            </div>

                            <?php $__errorArgs = ['edad'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="col-md-6 offset-3 text-danger"><?php echo e($message); ?></div>
                                <div class="col-md-3"></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        
                        
                        <div class="row form-group justify-content-center">
                            
                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="esterilizado" id="esterilizado" class="form-check-input" 
                                <?php if(old('esterilizado')): ?>
                                    checked
                                <?php endif; ?>>
                                <label for="esterilizado" class="text-dark form-check-label">Esterilizado</label>
                            </div>
                            
                            
                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="desparasitado" id="desparasitado" class="form-check-input" 
                                <?php if(old('desparasitado')): ?>
                                    checked
                                <?php endif; ?>>
                                <label for="desparasitado" class="text-dark form-check-label">Desparasitado</label>
                            </div>
                            
                            
                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="vacunado" id="vacunado" class="form-check-input"
                                <?php if(old('vacunado')): ?>
                                    checked
                                <?php endif; ?>>
                                <label for="vacunado" class="text-dark form-check-label">Vacunado</label>
                            </div>
                            
                        </div>
                        
                        
                        <div class="form-group row justify-content-center">

                            <div class="col-md-6">
                                <label class="col-md-3 col-form-label text-md-right text-dark">Género:</label>
                                
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="genero" id="genero_m"
                                        class="form-check-input
                                        <?php if(session('err')): ?>
                                            <?php if($errors->has('genero')): ?>
                                                radio-err
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        "
                                        value="Macho"
                                        <?php if(old('genero') === 'Macho'): ?>
                                            checked
                                        <?php endif; ?>>
                                    <label class="form-check-label" for="genero_m">
                                        Macho
                                    </label>
                                </div>
                                
                                
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="genero" id="genero_h"
                                        class="form-check-input
                                        <?php if(session('err')): ?>
                                            <?php if($errors->has('genero')): ?>
                                                radio-err
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        "
                                        value="Hembra"
                                        <?php if(old('genero') === 'Hembra'): ?>
                                            checked
                                        <?php endif; ?>>
                                    <label class="form-check-label" for="genero_h">
                                        Hembra
                                    </label>
                                </div>
                                
                                <?php $__errorArgs = ['genero'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="col-md-6 offset-3 text-danger"><?php echo e($message); ?></div>
                                <div class="col-md-3"></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        
                        
                        <div class="form-group row">
                            <label for="comportamiento" class="col-md-3 col-form-label text-md-right text-dark">Comportamiento:</label>

                            <div class="col-md-6">
                                <textarea name="comportamiento" id="comportamiento" class="form-control
                                <?php if(session('err')): ?>
                                    <?php if($errors->has('comportamiento')): ?>
                                        is-invalid
                                    <?php else: ?>
                                        is-valid
                                    <?php endif; ?>
                                <?php endif; ?>
                                " 
                                <?php if(session('err') && $errors->has('comportamiento')): ?>
                                    autofocus
                                <?php endif; ?>
                                 rows="3"><?php echo e(old('comportamiento') ? old('comportamiento') : ''); ?></textarea>
                            </div>

                            <div class="col-md-3">
                                <small class="text-muted">
                                    Maximo 500 caracteres.
                                </small>
                            </div>

                            <?php $__errorArgs = ['comportamiento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="col-md-6 offset-3 text-danger"><?php echo e($message); ?></div>
                                <div class="col-md-3"></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        
                        
                        <div class="form-group row">
                            <label for="otros_detalles" class="col-md-3 col-form-label text-md-right text-dark">Otros
                                detalles:</label>   
                            <div class="col-md-6">
                                <textarea name="otros_detalles" id="otros-detalles" class="form-control
                                <?php if(session('err')): ?>
                                    <?php if($errors->has('otros-detalles')): ?>
                                        is-invalid
                                    <?php else: ?>
                                        is-valid
                                    <?php endif; ?>
                                <?php endif; ?>
                                " 
                                <?php if(session('err') && $errors->has('otros_detalles')): ?>
                                    autofocus
                                <?php endif; ?> rows="3"><?php echo e(old('otros_detalles') ? old('otros_detalles') : ''); ?></textarea>
                            </div>

                            <div class="col-md-3">
                                <small class="text-muted">
                                    Maximo 500 caracteres.
                                </small>
                            </div>

                            <?php $__errorArgs = ['otros-detalles'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="col-md-6 offset-3 text-danger"><?php echo e($message); ?></div>
                                <div class="col-md-3"></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        
                        
                        <div class="form-group row">
                            <label for="imagen_perro"
                                class="col-md-3 col-form-label text-md-right text-dark">*Imagen:</label>

                            <div class="col-md-6">
                                <div class="custom-file">
                                    <input type="file" name="imagen_perro" id="imagen-perro" class="custom-file-input
                                    <?php if(session('err')): ?>
                                        <?php if($errors->has('imagen_perro')): ?>
                                            is-invalid
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    "
                                        <?php if(session('err') && $errors->has('imagen_perro')): ?>
                                            autofocus
                                        <?php endif; ?>>
                                    <label class="custom-file-label" for="imagen-perro">Selecciona Imagen</label>
                                </div>

                            </div>

                            <div class="col-md-3">
                                <small class="text-muted">
                                    El archivo puede pesar maximo 5 MB.
                                </small>
                            </div>

                            <?php $__errorArgs = ['imagen_perro'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="col-md-6 offset-3 text-danger"><?php echo e($message); ?></div>
                                <div class="col-md-3"></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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