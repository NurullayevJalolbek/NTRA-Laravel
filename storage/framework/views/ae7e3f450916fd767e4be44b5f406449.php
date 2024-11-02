<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'type' => 'default',
    'content' => '',
    'showOnCreate' => true
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
    'type' => 'default',
    'content' => '',
    'showOnCreate' => true
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php if($showOnCreate): ?>
<div x-data
     x-init="$nextTick(() => { $dispatch('toast', {type: '<?php echo e($type); ?>', text: '<?php echo e($content); ?>'}) })"
></div>
<?php else: ?>
    <div x-data="{ show(){$dispatch('toast', {type: '<?php echo e($type); ?>', text: '<?php echo e($content); ?>'})} }">
        <?php echo e($slot); ?>

    </div>
<?php endif; ?>

<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/components/toast.blade.php ENDPATH**/ ?>