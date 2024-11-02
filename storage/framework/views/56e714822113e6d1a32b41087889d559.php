<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'title' => '',
    'placement' => 'right',
    'trigger',
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
    'title' => '',
    'placement' => 'right',
    'trigger',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<span <?php echo e($attributes); ?> title="<?php echo e($title); ?>" data-content="<?php echo $slot; ?>"
     x-data="popover({placement: '<?php echo e($placement); ?>'})"
>
    <?php echo e($trigger); ?>

</span>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/components/popover.blade.php ENDPATH**/ ?>