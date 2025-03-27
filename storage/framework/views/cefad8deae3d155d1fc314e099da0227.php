<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'title' => '',
    'lines' => [],
    'colors' => [],
    'labels' => [],
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
    'lines' => [],
    'colors' => [],
    'labels' => [],
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<div
    <?php echo e($attributes->merge(['class' => 'chart'])); ?>

    x-data="charts({
                series: [
                <?php $__currentLoopData = $lines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $line): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $line; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label => $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    {
                        name: '<?php echo e($label); ?>',
                        data: <?php echo e(json_encode(array_values($values))); ?>,
                    },
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                ],
                colors: <?php echo e(json_encode($colors)); ?>,
                labels: <?php echo e(json_encode($labels)); ?>,
                chart: {
                    height: 300,
                    type: 'line',
                },
                yaxis: {
                    title: {
                        text: '<?php echo e($title); ?>',
                        style: {
                            fontWeight: 400,
                        },
                    },
                },
            })"
></div>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/components/metrics/line.blade.php ENDPATH**/ ?>