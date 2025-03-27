<?php echo moonshineAssets()->toHtml(); ?>


<?php echo $__env->yieldPushContent('styles'); ?>

<style>
    [x-cloak] { display: none !important; }
</style>

<script>
    const translates = <?php echo \Illuminate\Support\Js::from(__('moonshine::ui'))->toHtml() ?>;
</script>

<style>
    :root {
    <?php $__currentLoopData = moonshineColors()->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    --<?php echo e($name); ?>:<?php echo e($value); ?>;
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    }
    :root.dark {
    <?php $__currentLoopData = moonshineColors()->all(dark: true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        --<?php echo e($name); ?>:<?php echo e($value); ?>;
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    }
</style>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/layouts/shared/assets.blade.php ENDPATH**/ ?>