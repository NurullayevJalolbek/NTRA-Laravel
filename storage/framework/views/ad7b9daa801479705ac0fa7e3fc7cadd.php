<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'components' => []
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
    'components' => []
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php $__currentLoopData = $components; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fieldOrDecoration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if(!isSeeWhenExists($fieldOrDecoration)) continue; ?>

    <?php echo is_field($fieldOrDecoration) ? $fieldOrDecoration->getBeforeRender() : ''; ?>

    <?php if(is_field($fieldOrDecoration) && $fieldOrDecoration->hasWrapper()): ?>
        <?php if (isset($component)) { $__componentOriginal235f67923f05d9b0d0b555b07fb3c602 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal235f67923f05d9b0d0b555b07fb3c602 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.field-container','data' => ['field' => $fieldOrDecoration]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::field-container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($fieldOrDecoration)]); ?>
            <?php echo $fieldOrDecoration
                    ->{is_field($fieldOrDecoration) && $fieldOrDecoration->isForcePreview()
                        ? 'preview'
                        : 'render'}(); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal235f67923f05d9b0d0b555b07fb3c602)): ?>
<?php $attributes = $__attributesOriginal235f67923f05d9b0d0b555b07fb3c602; ?>
<?php unset($__attributesOriginal235f67923f05d9b0d0b555b07fb3c602); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal235f67923f05d9b0d0b555b07fb3c602)): ?>
<?php $component = $__componentOriginal235f67923f05d9b0d0b555b07fb3c602; ?>
<?php unset($__componentOriginal235f67923f05d9b0d0b555b07fb3c602); ?>
<?php endif; ?>
    <?php else: ?>
        <?php echo $fieldOrDecoration
                ->{is_field($fieldOrDecoration) && $fieldOrDecoration->isForcePreview()
                    ? 'preview'
                    : 'render'}(); ?>

    <?php endif; ?>
    <?php echo is_field($fieldOrDecoration) ? $fieldOrDecoration->getAfterRender() : ''; ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/components/fields-group.blade.php ENDPATH**/ ?>