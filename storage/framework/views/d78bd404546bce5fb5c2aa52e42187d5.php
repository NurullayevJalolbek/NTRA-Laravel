<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'config' => '',
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
    'config' => '',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<div class="tinymce">
    <?php if (isset($component)) { $__componentOriginalbbd5cf330a72c1a161c8ccdf43d2a1d7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbbd5cf330a72c1a161c8ccdf43d2a1d7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.textarea','data' => ['attributes' => $element->attributes()->merge([
            'name' => $element->name()
        ])->except('x-bind:id'),'class' => \Illuminate\Support\Arr::toCssClasses(['form-invalid' => formErrors($errors, $element->getFormName())->has($element->name())]),':id' => '$id(\'tiny-mce\')','xData' => 'tinymce('.e($config).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form.textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->attributes()->merge([
            'name' => $element->name()
        ])->except('x-bind:id')),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses(['form-invalid' => formErrors($errors, $element->getFormName())->has($element->name())])),':id' => '$id(\'tiny-mce\')','x-data' => 'tinymce('.e($config).')']); ?><?php echo $value ?? ''; ?> <?php echo $__env->renderComponent(); ?>
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
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/fields/tinymce.blade.php ENDPATH**/ ?>