<a href="<?php echo e($home_route ?? moonshineRouter()->home()); ?>" class="block" rel="home">
    <img src="<?php echo e(asset(config('moonshine.logo') ?? 'vendor/moonshine/logo.svg')); ?>"
         class="hidden h-14 xl:block"
         :class="minimizedMenu && '!hidden'"
         alt="<?php echo e(config('moonshine.title')); ?>"
    />
    <img src="<?php echo e(asset(config('moonshine.logo_small') ?? 'vendor/moonshine/logo-small.svg')); ?>"
         class="block h-8 lg:h-10 xl:hidden"
         :class="minimizedMenu && '!block'"
         alt="<?php echo e(config('moonshine.title')); ?>"
    />
</a>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/layouts/shared/logo.blade.php ENDPATH**/ ?>