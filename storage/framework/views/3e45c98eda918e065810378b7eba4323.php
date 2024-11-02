<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'title' => '',
    'icon' => '',
    'progress' => false,
    'value' => 0,
    'simpleValue' => '',
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
    'icon' => '',
    'progress' => false,
    'value' => 0,
    'simpleValue' => '',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<div <?php echo e($attributes->merge(['class' => 'report-card'])); ?>>
    <div class="report-card-heading">
        <?php echo $icon; ?>

    </div>

    <?php if($progress): ?>
        <?php if (isset($component)) { $__componentOriginal7e31e2a00c064d95919d019b583001a7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7e31e2a00c064d95919d019b583001a7 = $attributes; } ?>
<?php $component = MoonShine\Components\ProgressBar::resolve(['color' => 'primary','radial' => false,'value' => $value] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::progress-bar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\Components\ProgressBar::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <?php echo e($value); ?>%
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7e31e2a00c064d95919d019b583001a7)): ?>
<?php $attributes = $__attributesOriginal7e31e2a00c064d95919d019b583001a7; ?>
<?php unset($__attributesOriginal7e31e2a00c064d95919d019b583001a7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7e31e2a00c064d95919d019b583001a7)): ?>
<?php $component = $__componentOriginal7e31e2a00c064d95919d019b583001a7; ?>
<?php unset($__componentOriginal7e31e2a00c064d95919d019b583001a7); ?>
<?php endif; ?>
    <?php endif; ?>

    <div class="report-card-body">
        <div class="report-card-value"><?php echo $simpleValue; ?></div>
        <h5 class="report-card-title"><?php echo $title; ?></h5>
    </div>
</div>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/components/metrics/value.blade.php ENDPATH**/ ?>