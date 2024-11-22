<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" x-data>
<head>
<?php echo $__env->make('moonshine::layouts.shared.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo view('moonshine::layouts.shared.assets'); ?>
</head>
<body class="antialiased !bg-dark">
<?php echo $__env->yieldContent('content'); ?>
</body>
</html>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/layouts/blank.blade.php ENDPATH**/ ?>