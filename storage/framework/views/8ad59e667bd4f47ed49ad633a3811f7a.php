<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'route',
    'logOutRoute',
    'avatar',
    'name' => '',
    'username' => '',
    'withBorder' => false,
    'before',
    'after',
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'route',
    'logOutRoute',
    'avatar',
    'name' => '',
    'username' => '',
    'withBorder' => false,
    'before',
    'after',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php if($withBorder): ?> <div <?php echo e($attributes->merge(['class' => 'mt-2 border-t border-dark-200'])); ?>> <?php endif; ?>
    <?php echo e($before ?? ''); ?>


    <?php if(isset($slot) && $slot->isNotEmpty()): ?>
        <?php echo e($slot); ?>

    <?php else: ?>
        <div class="menu-profile">
            <a href="<?php echo e($route); ?>"
               class="menu-profile-main"
            >
                <?php if($avatar): ?>
                    <div class="menu-profile-photo">
                        <img class="h-full w-full object-cover"
                             src="<?php echo e($avatar); ?>"
                             alt="<?php echo e($nameOfUser); ?>"
                        />
                    </div>
                <?php endif; ?>
                <div class="menu-profile-info">
                    <h5 class="name"><?php echo e($nameOfUser); ?></h5>
                    <div class="email"><?php echo e($username); ?></div>
                </div>
            </a>

            <a href="<?php echo e($logOutRoute); ?>"
               class="menu-profile-exit"
               title="Logout"
            >
                <?php if (isset($component)) { $__componentOriginal02cd8db43c93f795a84d3988e7d5cfee = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal02cd8db43c93f795a84d3988e7d5cfee = $attributes; } ?>
<?php $component = MoonShine\Components\Icon::resolve(['icon' => 'heroicons.power','color' => 'gray','size' => '6'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal02cd8db43c93f795a84d3988e7d5cfee)): ?>
<?php $attributes = $__attributesOriginal02cd8db43c93f795a84d3988e7d5cfee; ?>
<?php unset($__attributesOriginal02cd8db43c93f795a84d3988e7d5cfee); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal02cd8db43c93f795a84d3988e7d5cfee)): ?>
<?php $component = $__componentOriginal02cd8db43c93f795a84d3988e7d5cfee; ?>
<?php unset($__componentOriginal02cd8db43c93f795a84d3988e7d5cfee); ?>
<?php endif; ?>
            </a>
        </div>
    <?php endif; ?>

    <?php echo e($after ?? ''); ?>

<?php if($withBorder): ?> </div> <?php endif; ?>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/components/layout/profile.blade.php ENDPATH**/ ?>