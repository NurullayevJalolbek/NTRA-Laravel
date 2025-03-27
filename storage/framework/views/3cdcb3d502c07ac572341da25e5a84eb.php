<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'icon' => '',
    'size' => 5,
    'color' => '',
    'class' => $attributes->get('class')
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
    'icon' => '',
    'size' => 5,
    'color' => '',
    'class' => $attributes->get('class')
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php echo $__env->renderWhen($icon, "moonshine::ui.icons.$icon", array_merge([
    'size' => $size,
    'class' => $class,
    'color' => $color
]), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
<?php /**PATH /var/www/vendor/moonshine/moonshine/src/Providers/../../resources/views/components/icon.blade.php ENDPATH**/ ?>