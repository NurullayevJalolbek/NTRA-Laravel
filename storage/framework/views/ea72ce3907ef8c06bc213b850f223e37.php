<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'extensions' => null,
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
    'extensions' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php if($extensions && $extensions->isNotEmpty()): ?>
    <div <?php echo e($attributes->merge(['class' => 'form-group form-group-expansion'])); ?>

         x-init="<?php echo trim($extensions->implode(fn($extension) => $extension->xInit()->implode(';'), ';'), ';'); ?>"
         x-data="{ <?php echo trim($extensions->implode(fn($extension) => $extension->xData()->implode(','), ','), ','); ?> }"
    >
        <?php echo e($slot); ?>


        <?php $__currentLoopData = $extensions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $extension): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo e($extension->render()); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php else: ?>
    <?php echo e($slot); ?>

<?php endif; ?>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/components/form/input-extensions.blade.php ENDPATH**/ ?>