<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'key' => 'alert',
    'type' => 'info',
    'withToast' => true,
    'removable' => true,
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
    'key' => 'alert',
    'type' => 'info',
    'withToast' => true,
    'removable' => true,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php if(session()->has($key)): ?>
    <?php if (isset($component)) { $__componentOriginal3313f0c63d1b3ed042b48e2b7aff80be = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3313f0c63d1b3ed042b48e2b7aff80be = $attributes; } ?>
<?php $component = MoonShine\Components\Alert::resolve(['removable' => $removable,'type' => $type] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\Components\Alert::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <?php echo e(session()->get($key)); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3313f0c63d1b3ed042b48e2b7aff80be)): ?>
<?php $attributes = $__attributesOriginal3313f0c63d1b3ed042b48e2b7aff80be; ?>
<?php unset($__attributesOriginal3313f0c63d1b3ed042b48e2b7aff80be); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3313f0c63d1b3ed042b48e2b7aff80be)): ?>
<?php $component = $__componentOriginal3313f0c63d1b3ed042b48e2b7aff80be; ?>
<?php unset($__componentOriginal3313f0c63d1b3ed042b48e2b7aff80be); ?>
<?php endif; ?>
<?php endif; ?>

<?php if($withToast && $toast = session()->get('toast')): ?>
    <?php if (isset($component)) { $__componentOriginale0fb665341445bb696dc3b9e7c187fc3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale0fb665341445bb696dc3b9e7c187fc3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.toast','data' => ['type' => $toast['type'],'content' => $toast['message']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::toast'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($toast['type']),'content' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($toast['message'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale0fb665341445bb696dc3b9e7c187fc3)): ?>
<?php $attributes = $__attributesOriginale0fb665341445bb696dc3b9e7c187fc3; ?>
<?php unset($__attributesOriginale0fb665341445bb696dc3b9e7c187fc3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale0fb665341445bb696dc3b9e7c187fc3)): ?>
<?php $component = $__componentOriginale0fb665341445bb696dc3b9e7c187fc3; ?>
<?php unset($__componentOriginale0fb665341445bb696dc3b9e7c187fc3); ?>
<?php endif; ?>
<?php endif; ?>
<?php /**PATH /var/www/vendor/moonshine/moonshine/src/Providers/../../resources/views/components/layout/flash.blade.php ENDPATH**/ ?>