<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'components' => [],
    'notifications' => true,
    'locales' => true,
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
    'notifications' => true,
    'locales' => true,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<div <?php echo e($attributes->merge(['class' => 'layout-navigation'])); ?>>
    <?php $__env->startSection("header-inner"); ?>

    <?php echo $__env->yieldSection(); ?>

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


    <?php echo $__env->renderWhen(
        $notifications && config('moonshine.auth.enable', true),
        'moonshine::layouts.shared.notifications'
    , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>

    <?php if($locales): ?>
        <?php if (isset($component)) { $__componentOriginal6a7df120efbb5816a6c500dd54f58035 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6a7df120efbb5816a6c500dd54f58035 = $attributes; } ?>
<?php $component = MoonShine\Components\Layout\Locales::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::layout.locales'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\Components\Layout\Locales::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6a7df120efbb5816a6c500dd54f58035)): ?>
<?php $attributes = $__attributesOriginal6a7df120efbb5816a6c500dd54f58035; ?>
<?php unset($__attributesOriginal6a7df120efbb5816a6c500dd54f58035); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6a7df120efbb5816a6c500dd54f58035)): ?>
<?php $component = $__componentOriginal6a7df120efbb5816a6c500dd54f58035; ?>
<?php unset($__componentOriginal6a7df120efbb5816a6c500dd54f58035); ?>
<?php endif; ?>
    <?php endif; ?>
</div>
<?php /**PATH /var/www/vendor/moonshine/moonshine/src/Providers/../../resources/views/components/layout/header.blade.php ENDPATH**/ ?>