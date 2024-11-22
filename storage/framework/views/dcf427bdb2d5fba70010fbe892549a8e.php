<div
    class="<?php echo \Illuminate\Support\Arr::toCssClasses(['code-container', 'form-invalid' => formErrors($errors, $element->getFormName())->has($element->name())]); ?>"
>
    <div
        x-data="code({
        lineNumbers: <?php echo e($element->lineNumbers ? 'true' : 'false'); ?>,
        language: '<?php echo e($element->language ?? 'js'); ?>',
        readonly: <?php echo e($element->isReadonly() ? 'true' : 'false'); ?>,
    })"
        <?php echo e($element->attributes()
            ->only('class')
            ->merge(['class' => 'w-100 min-h-[300px] relative'])); ?>

    ></div>

    <?php if (isset($component)) { $__componentOriginalbbd5cf330a72c1a161c8ccdf43d2a1d7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbbd5cf330a72c1a161c8ccdf43d2a1d7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.textarea','data' => ['style' => 'display: none;','attributes' => $element->attributes()->merge([
        'aria-label' => $element->label() ?? '',
        'name' => $element->name(),
        'class' => 'code-source'
    ])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form.textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['style' => 'display: none;','attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->attributes()->merge([
        'aria-label' => $element->label() ?? '',
        'name' => $element->name(),
        'class' => 'code-source'
    ]))]); ?><?php echo $value ?? ''; ?> <?php echo $__env->renderComponent(); ?>
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

<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/fields/code.blade.php ENDPATH**/ ?>