<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'value' => null,
    'values' => null,
    'alt' => '',
    'names' => null,
    'itemAttributes' => null,
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
    'value' => null,
    'values' => null,
    'alt' => '',
    'names' => null,
    'itemAttributes' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php if($value): ?>
    <div class="flex">
        <div
            <?php if(is_null($itemAttributes)): ?>
                class="zoom-in h-10 w-10 overflow-hidden rounded-md"
            <?php else: ?>
                <?php echo e(value($itemAttributes, $value)?->class(['zoom-in h-10 w-10 overflow-hidden rounded-md'])); ?>

            <?php endif; ?>
        >
            <img class="h-full w-full object-cover"
                 src="<?php echo e($value); ?>"
                 alt="<?php echo e(value($names, $value) ?? $alt); ?>"
                 @click.stop="$dispatch('img-popup', {open: true, src: '<?php echo e($value); ?>' })"
            >
        </div>
    </div>
<?php elseif($values): ?>
    <div class="images-row">
        <?php $__currentLoopData = $values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div
                <?php if(is_null($itemAttributes)): ?>
                    class="zoom-in images-row-item"
                <?php else: ?>
                    <?php echo e(value($itemAttributes, $value, $index)?->class(['zoom-in images-row-item'])); ?>

                <?php endif; ?>
            >
                <img
                    class="h-full w-full object-cover"
                     src="<?php echo e($value); ?>"
                     alt="<?php echo e(value($names, $value, $index) ?? $alt); ?>"
                     @click.stop="$dispatch('img-popup', {open: true, src: '<?php echo e($value); ?>' })"
                />
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/components/thumbnails.blade.php ENDPATH**/ ?>