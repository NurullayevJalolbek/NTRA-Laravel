<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'simple' => false,
    'values' => false,
    'columns' => false,
    'notfound' => false,
    'responsive' => true,
    'sticky' => false,
    'thead',
    'tbody',
    'tfoot',
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
    'simple' => false,
    'values' => false,
    'columns' => false,
    'notfound' => false,
    'responsive' => true,
    'sticky' => false,
    'thead',
    'tbody',
    'tfoot',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php if(isset($tbody) || (is_iterable($values) && count($values))): ?>
    <!-- Table -->
    <div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['table-responsive' => $responsive, 'table-sticky' => $sticky]); ?>">
        <table <?php echo e($attributes
                ->merge(['class' => 'table' . (!$simple ? '-list' : '')])); ?> x-id="['table-component']" :id="$id('table-component')">
            <thead <?php echo e($thead->attributes ?? ''); ?>>
            <tr>
                <?php if(is_array($columns)): ?>
                    <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <th>
                            <?php echo e($label); ?>

                        </th>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

                <?php echo e($thead ?? ''); ?>

            </tr>
            </thead>
            <tbody  <?php echo e($tbody->attributes ?? ''); ?>>
            <?php if(is_iterable($values)): ?>
                <?php $__currentLoopData = $values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <td>
                                <?php echo isset($data[$name]) && is_scalar($data[$name]) ? $data[$name] : ''; ?>

                            </td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>

            <?php echo e($tbody ?? ''); ?>

            </tbody>

            <?php if($tfoot ?? false): ?>
                <tfoot <?php echo e($tfoot->attributes); ?>>
                    <tr>
                        <?php echo e($tfoot); ?>

                    </tr>
                </tfoot>
            <?php endif; ?>
        </table>
    </div>
<?php elseif($notfound): ?>
    <?php if (isset($component)) { $__componentOriginal3313f0c63d1b3ed042b48e2b7aff80be = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3313f0c63d1b3ed042b48e2b7aff80be = $attributes; } ?>
<?php $component = MoonShine\Components\Alert::resolve(['type' => 'default','icon' => 'heroicons.no-symbol'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\Components\Alert::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'my-4']); ?>
        <?php echo e(trans('moonshine::ui.notfound')); ?>

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
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/components/table/index.blade.php ENDPATH**/ ?>