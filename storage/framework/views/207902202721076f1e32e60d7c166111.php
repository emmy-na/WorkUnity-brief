<?php echo csrf_field(); ?>

<div class="mb-3">
  <label class="form-label">Prénom</label>
  <input type="text" name="first_name" value="<?php echo e(old('first_name', $employee->first_name ?? '')); ?>" class="form-control">
  <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-danger small"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<div class="mb-3">
  <label class="form-label">Nom</label>
  <input type="text" name="last_name" value="<?php echo e(old('last_name', $employee->last_name ?? '')); ?>" class="form-control">
  <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-danger small"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<div class="mb-3">
  <label class="form-label">Email</label>
  <input type="email" name="email" value="<?php echo e(old('email', $employee->email ?? '')); ?>" class="form-control">
  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-danger small"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<div class="mb-3">
  <label class="form-label">Poste</label>
  <input type="text" name="position" value="<?php echo e(old('position', $employee->position ?? '')); ?>" class="form-control">
  <?php $__errorArgs = ['position'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-danger small"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<button 
    type="submit"
    class="px-4 py-2 text-white bg-gray-800 rounded hover:bg-amber-700 transition"
>
    Enregistrer
</button>

<a 
    href="<?php echo e(route('employees.index')); ?>"
    class="ml-3 text-amber-800 hover:underline"
>
    Annuler
</a>
<?php /**PATH C:\Users\HP\Documents\laravel\workunity-app\resources\views/employees/_form.blade.php ENDPATH**/ ?>