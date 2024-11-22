<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'title' => '',
    'values' => [],
    'labels' => [],
    'colors' => [],
    'decimals' => 3,
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
    'values' => [],
    'labels' => [],
    'colors' => [],
    'decimals' => 3,
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
        series: <?php echo e(json_encode($values)); ?>,
        colors: <?php echo e(json_encode($colors)); ?>,
        tooltip: {
            y: {
                formatter: function (val) {
                    return `${val}`
                },
                title: {
                    formatter: function (seriesName) {
                        return `${seriesName}:`
                    },
                },
            },
        },
        labels: <?php echo e(json_encode($labels)); ?>,
        chart: {
            height: 350,
            type: 'donut',
        },
        stroke: {
            colors: ['transparent'],
        },
        plotOptions: {
            pie: {
                expandOnClick: false,
                donut: {
                    labels: {
                        show: true,
                        total: {
                            label: '<?php echo e($title); ?>',
                            showAlways: false,
                            show: true,
                            formatter: function (w) {
                            return Number(w.globals.seriesTotals.reduce((a, b) => {
                              return a + b
                            }, 0).toFixed(<?php echo e($decimals); ?>))
                          }
                        }
                    }
                }
            },
        },
    })"
></div>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/components/metrics/donut.blade.php ENDPATH**/ ?>