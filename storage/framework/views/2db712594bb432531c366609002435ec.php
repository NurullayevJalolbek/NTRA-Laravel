<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'files' => [],
    'download' => true,
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
    'files' => [],
    'download' => true,
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
<?php if(array_filter((array) $files)): ?>
    <div <?php echo e($attributes->class(['dropzone-items'])); ?>>
        <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div
                <?php if(is_null($itemAttributes)): ?>
                    class="dropzone-item dropzone-item-file"
                <?php else: ?>
                    <?php echo e(value($itemAttributes, $file, $index)?->class(['dropzone-item dropzone-item-file'])); ?>

                <?php endif; ?>
            >
                <?php echo $__env->make('moonshine::ui.file', [
                    'value' => $file,
                    'filename' => value($names, $file, $index),
                    'download' => $download
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/components/files.blade.php ENDPATH**/ ?>