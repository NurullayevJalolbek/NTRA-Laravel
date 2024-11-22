<meta charset="utf-8" />

<title><?php echo $__env->yieldContent('title', config("moonshine.title")); ?></title>

<meta name="description"
      content="<?php echo e(config("moonshine.title")); ?>"
/>

<meta name="viewport"
      content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"
/>

<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<?php echo $__env->make('moonshine::layouts.shared.favicon', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<meta name="msapplication-TileColor" content="<?php echo e(moonshineColors()->get('body')); ?>">
<meta name="theme-color" content="<?php echo e(moonshineColors()->get('body')); ?>">
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/layouts/shared/head.blade.php ENDPATH**/ ?>