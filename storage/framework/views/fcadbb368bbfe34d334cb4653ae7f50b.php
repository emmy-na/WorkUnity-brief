

<?php $__env->startSection('content'); ?>
  <div class="d-flex justify-content-between mb-3">
    <h1>Liste des employés</h1>
    <a href="<?php echo e(route('employees.create')); ?>" class="btn btn-success">Ajouter un employé</a>
  </div>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>
        <th>Poste</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php $__empty_1 = true; $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
          <td><?php echo e($emp->last_name); ?></td>
          <td><?php echo e($emp->first_name); ?></td>
          <td><?php echo e($emp->email); ?></td>
          <td><?php echo e($emp->position); ?></td>
          <td>
            <a href="<?php echo e(route('employees.show', $emp)); ?>" class="btn btn-sm btn-outline-primary">Voir</a>
            <a href="<?php echo e(route('employees.edit', $emp)); ?>" class="btn btn-sm btn-outline-secondary">Modifier</a>

            <form action="<?php echo e(route('employees.destroy', $emp)); ?>" method="POST" class="d-inline" onsubmit="return confirm('Supprimer cet employé ?')">
              <?php echo csrf_field(); ?>
              <?php echo method_field('DELETE'); ?>
              <button class="btn btn-sm btn-outline-danger">Supprimer</button>
            </form>
          </td>
        </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
          <td colspan="5">Aucun employé trouvé.</td>
        </tr>
      <?php endif; ?>
    </tbody>
  </table>

  <?php echo e($employees->links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Documents\laravel\workunity-app\resources\views/employees/index.blade.php ENDPATH**/ ?>