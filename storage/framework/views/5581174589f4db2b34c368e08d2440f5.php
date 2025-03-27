<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'icon' => false,
    'badge' => false,
    'filled' => false,
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
    'icon' => false,
    'badge' => false,
    'filled' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<a <?php echo e($attributes->class(['btn', 'btn-primary' => $filled])); ?>>
    <?php if($icon): ?>
        <?php if (isset($component)) { $__componentOriginal02cd8db43c93f795a84d3988e7d5cfee = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal02cd8db43c93f795a84d3988e7d5cfee = $attributes; } ?>
<?php $component = MoonShine\Components\Icon::resolve(['icon' => $icon,'size' => '4'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
    <?php endif; ?>

    <?php echo e($slot); ?>


    <?php if($badge !== false): ?>
        <?php if (isset($component)) { $__componentOriginal0f84a35ac5116b2d6f172ab2d1c16403 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0f84a35ac5116b2d6f172ab2d1c16403 = $attributes; } ?>
<?php $component = MoonShine\Components\Badge::resolve(['color' => ''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\Components\Badge::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo e($badge); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0f84a35ac5116b2d6f172ab2d1c16403)): ?>
<?php $attributes = $__attributesOriginal0f84a35ac5116b2d6f172ab2d1c16403; ?>
<?php unset($__attributesOriginal0f84a35ac5116b2d6f172ab2d1c16403); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0f84a35ac5116b2d6f172ab2d1c16403)): ?>
<?php $component = $__componentOriginal0f84a35ac5116b2d6f172ab2d1c16403; ?>
<?php unset($__componentOriginal0f84a35ac5116b2d6f172ab2d1c16403); ?>
<?php endif; ?>
    <?php endif; ?>
</a>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/components/link-button.blade.php ENDPATH**/ ?>