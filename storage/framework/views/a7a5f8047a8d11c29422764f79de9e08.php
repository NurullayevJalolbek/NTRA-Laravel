<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'value' => '',
    'options' => '',
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
    'value' => '',
    'options' => '',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div class="easyMde">
    <?php if (isset($component)) { $__componentOriginalbbd5cf330a72c1a161c8ccdf43d2a1d7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbbd5cf330a72c1a161c8ccdf43d2a1d7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.textarea','data' => ['attributes' => $element->attributes()->merge([
            'id' => 'markdown_' . $element->id(),
            'name' => $element->name()
        ]),'class' => \Illuminate\Support\Arr::toCssClasses(['form-invalid' => formErrors($errors, $element->getFormName())->has($element->name())]),'xData' => 'easyMde('.e($options).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form.textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->attributes()->merge([
            'id' => 'markdown_' . $element->id(),
            'name' => $element->name()
        ])),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses(['form-invalid' => formErrors($errors, $element->getFormName())->has($element->name())])),'x-data' => 'easyMde('.e($options).')']); ?><?php echo $value ?? ''; ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbbd5cf330a72c1a161c8ccdf43d2a1d7)): ?>
<?php $attributes = $__attributesOriginalbbd5cf330a72c1a161c8ccdf43d2a1d7; ?>
<?php unset($__attributesOriginalbbd5cf330a72c1a161c8ccdf43d2a1d7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbbd5cf330a72c1a161c8ccdf43d2a1d7)): ?>
<?php $component = $__componentOriginalbbd5cf330a72c1a161c8ccdf43d2a1d7; ?>
<?php unset($__componentOriginalbbd5cf330a72c1a161c8ccdf43d2a1d7); ?>
<?php endif; ?>
</div>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/fields/markdown.blade.php ENDPATH**/ ?>