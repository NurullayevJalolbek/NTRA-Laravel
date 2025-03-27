<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'actions',
    'simple' => false
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
    'actions',
    'simple' => false
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php if (isset($component)) { $__componentOriginal89b444d4d0106ea470feb5795ea8a5e0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b444d4d0106ea470feb5795ea8a5e0 = $attributes; } ?>
<?php $component = MoonShine\Components\ActionGroup::resolve(['actions' => $actions] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::action-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\Components\ActionGroup::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses([
        'flex-nowrap',
        'justify-end' => ! $simple,
        'justify-center' => $simple,
    ]))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b444d4d0106ea470feb5795ea8a5e0)): ?>
<?php $attributes = $__attributesOriginal89b444d4d0106ea470feb5795ea8a5e0; ?>
<?php unset($__attributesOriginal89b444d4d0106ea470feb5795ea8a5e0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b444d4d0106ea470feb5795ea8a5e0)): ?>
<?php $component = $__componentOriginal89b444d4d0106ea470feb5795ea8a5e0; ?>
<?php unset($__componentOriginal89b444d4d0106ea470feb5795ea8a5e0); ?>
<?php endif; ?>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/components/table/actions.blade.php ENDPATH**/ ?>