<?php $__env->startSection('content'); ?>
    <div class="authentication">
        <div class="authentication-logo">
            <a href="/" rel="home">
                <img class="h-16"
                     src="<?php echo e(asset(config('moonshine.logo') ?? 'vendor/moonshine/logo.svg')); ?>"
                     alt="<?php echo e(config('moonshine.title')); ?>"
                >
            </a>
        </div>

        <div class="authentication-content">
            <div class="authentication-header">
                <h1 class="title">
                    <?php echo app('translator')->get(
                        'moonshine::ui.login.title',
                        ['moonshine_title' => config('moonshine.title')]
                    ); ?>
                </h1>

                <p class="description">
                    <?php echo app('translator')->get('moonshine::ui.login.description'); ?>
                </p>
            </div>

            <?php echo $form(); ?>


            <p class="text-center text-2xs">
                <?php echo config('moonshine.auth.footer', ''); ?>

            </p>

            <div class="authentication-footer">
                <?php echo $__env->make('moonshine::ui.social-auth', [
                    'title' => trans('moonshine::ui.login.or_socials')
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("moonshine::layouts.login", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vendor/moonshine/moonshine/src/Providers/../../resources/views/auth/login.blade.php ENDPATH**/ ?>