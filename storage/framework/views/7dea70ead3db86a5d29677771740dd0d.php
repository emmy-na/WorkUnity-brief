<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>WorkUnity</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
    <div class="container">
      <a class="navbar-brand" href="<?php echo e(route('employees.index')); ?>">WorkUnity</a>
    </div>
  </nav>

  <main class="container">
    <?php if(session('success')): ?>
      <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <?php echo $__env->yieldContent('content'); ?>
  </main>
</body>
</html>
<?php /**PATH C:\Users\HP\Documents\laravel\workunity-app\resources\views/layouts/app.blade.php ENDPATH**/ ?>