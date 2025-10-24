

<?php $__env->startSection('content'); ?>
  <h1>Ajouter un employé</h1>
  <form action="<?php echo e(route('employees.store')); ?>" method="POST">
    <?php echo $__env->make('employees._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Documents\laravel\workunity-app\resources\views/employees/create.blade.php ENDPATH**/ ?>