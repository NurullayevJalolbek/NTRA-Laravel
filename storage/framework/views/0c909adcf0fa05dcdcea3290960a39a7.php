<?php if (isset($component)) { $__componentOriginalbbd5cf330a72c1a161c8ccdf43d2a1d7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbbd5cf330a72c1a161c8ccdf43d2a1d7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.textarea','data' => ['attributes' => $element->attributes()->merge([
        'id' => $element->id(),
        'aria-label' => $element->label() ?? '',
        'name' => $element->name(),
    ]),'class' => \Illuminate\Support\Arr::toCssClasses(['form-invalid' => formErrors($errors, $element->getFormName())->has($element->name())])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form.textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->attributes()->merge([
        'id' => $element->id(),
        'aria-label' => $element->label() ?? '',
        'name' => $element->name(),
    ])),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses(['form-invalid' => formErrors($errors, $element->getFormName())->has($element->name())]))]); ?><?php echo $value ?? ''; ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbbd5cf330a72c1a161c8ccdf43d2a1d7)): ?>
<?php $attributes = $__attributesOriginalbbd5cf330a72c1a161c8ccdf43d2a1d7; ?>
<?php unset($__attributesOriginalbbd5cf330a72c1a161c8ccdf43d2a1d7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbbd5cf330a72c1a161c8ccdf43d2a1d7)): ?>
<?php $component = $__componentOriginalbbd5cf330a72c1a161c8ccdf43d2a1d7; ?>
<?php unset($__componentOriginalbbd5cf330a72c1a161c8ccdf43d2a1d7); ?>
<?php endif; ?>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/fields/textarea.blade.php ENDPATH**/ ?>