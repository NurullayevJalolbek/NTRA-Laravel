<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'components' => [],
    'copyright' => $_copyright ?? '',
    'menu' => $_menu ?? []
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
    'components' => [],
    'copyright' => $_copyright ?? '',
    'menu' => $_menu ?? []
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<footer <?php echo e($attributes->merge(['class' => 'layout-footer'])); ?>>
    <div class="flex flex-col flex-wrap items-center justify-between gap-y-4 gap-x-8 md:flex-row">
        <?php if (isset($component)) { $__componentOriginal011755f4cd8238a723199ac83befc65c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal011755f4cd8238a723199ac83befc65c = $attributes; } ?>
<?php $component = MoonShine\Components\Components::resolve(['components' => $components] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::components'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\Components\Components::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal011755f4cd8238a723199ac83befc65c)): ?>
<?php $attributes = $__attributesOriginal011755f4cd8238a723199ac83befc65c; ?>
<?php unset($__attributesOriginal011755f4cd8238a723199ac83befc65c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal011755f4cd8238a723199ac83befc65c)): ?>
<?php $component = $__componentOriginal011755f4cd8238a723199ac83befc65c; ?>
<?php unset($__componentOriginal011755f4cd8238a723199ac83befc65c); ?>
<?php endif; ?>

        <?php echo e($slot ?? ''); ?>


        <div class="text-center text-2xs text-slate-500 md:text-left">
            <?php echo $copyright; ?>

        </div>

        <?php if(!empty($menu)): ?>
            <nav class="flex flex-wrap justify-center gap-x-4 gap-y-2 md:justify-start lg:gap-x-6">
                <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e($link); ?>"
                       class="text-2xs text-slate-500 hover:text-primary"
                       target="_blank">
                        <?php echo $label; ?>

                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </nav>
        <?php endif; ?>
    </div>
</footer>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/components/layout/footer.blade.php ENDPATH**/ ?>