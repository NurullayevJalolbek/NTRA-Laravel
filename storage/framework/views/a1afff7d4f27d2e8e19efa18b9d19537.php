<div
    x-data="{
         range_from_<?php echo e($element->id()); ?>: '<?php echo e($value[$element->fromField] ?? ''); ?>',
         range_to_<?php echo e($element->id()); ?>: '<?php echo e($value[$element->toField] ?? ''); ?>'
     }"
    <?php echo e($element->attributes()
        ->only('class')
        ->merge(['class' => 'form-group form-group-inline'])); ?>


    data-field-block="<?php echo e($element->name()); ?>"
>
    <?php if (isset($component)) { $__componentOriginal14a9cb58f632607a286ccbee397ec70f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal14a9cb58f632607a286ccbee397ec70f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.input','data' => ['attributes' => $element->getFromAttributes()->merge([
            'name' => $element->name($element->fromField),
        ]),'xBind:max' => 'range_to_'.e($element->id()).'','xModel' => 'range_from_'.e($element->id()).'','value' => ''.e($value[$element->fromField] ?? '').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->getFromAttributes()->merge([
            'name' => $element->name($element->fromField),
        ])),'x-bind:max' => 'range_to_'.e($element->id()).'','x-model' => 'range_from_'.e($element->id()).'','value' => ''.e($value[$element->fromField] ?? '').'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal14a9cb58f632607a286ccbee397ec70f)): ?>
<?php $attributes = $__attributesOriginal14a9cb58f632607a286ccbee397ec70f; ?>
<?php unset($__attributesOriginal14a9cb58f632607a286ccbee397ec70f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal14a9cb58f632607a286ccbee397ec70f)): ?>
<?php $component = $__componentOriginal14a9cb58f632607a286ccbee397ec70f; ?>
<?php unset($__componentOriginal14a9cb58f632607a286ccbee397ec70f); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal14a9cb58f632607a286ccbee397ec70f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal14a9cb58f632607a286ccbee397ec70f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.input','data' => ['attributes' => $element->getToAttributes()->merge([
            'name' => $element->name($element->toField)
        ]),'xBind:min' => 'range_from_'.e($element->id()).'','xModel' => 'range_to_'.e($element->id()).'','value' => ''.e($value[$element->toField] ?? '').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->getToAttributes()->merge([
            'name' => $element->name($element->toField)
        ])),'x-bind:min' => 'range_from_'.e($element->id()).'','x-model' => 'range_to_'.e($element->id()).'','value' => ''.e($value[$element->toField] ?? '').'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal14a9cb58f632607a286ccbee397ec70f)): ?>
<?php $attributes = $__attributesOriginal14a9cb58f632607a286ccbee397ec70f; ?>
<?php unset($__attributesOriginal14a9cb58f632607a286ccbee397ec70f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal14a9cb58f632607a286ccbee397ec70f)): ?>
<?php $component = $__componentOriginal14a9cb58f632607a286ccbee397ec70f; ?>
<?php unset($__componentOriginal14a9cb58f632607a286ccbee397ec70f); ?>
<?php endif; ?>
</div>

<?php $__errorArgs = [$element->getNameDotFrom(), $element->getFormName()];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
<?php if (isset($component)) { $__componentOriginal8c392c2543387e7715c9099e7b7baca4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8c392c2543387e7715c9099e7b7baca4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.input-error','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form.input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php echo e($message); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8c392c2543387e7715c9099e7b7baca4)): ?>
<?php $attributes = $__attributesOriginal8c392c2543387e7715c9099e7b7baca4; ?>
<?php unset($__attributesOriginal8c392c2543387e7715c9099e7b7baca4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8c392c2543387e7715c9099e7b7baca4)): ?>
<?php $component = $__componentOriginal8c392c2543387e7715c9099e7b7baca4; ?>
<?php unset($__componentOriginal8c392c2543387e7715c9099e7b7baca4); ?>
<?php endif; ?>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

<?php $__errorArgs = [$element->getNameDotTo(), $element->getFormName()];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
<?php if (isset($component)) { $__componentOriginal8c392c2543387e7715c9099e7b7baca4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8c392c2543387e7715c9099e7b7baca4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.input-error','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form.input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php echo e($message); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8c392c2543387e7715c9099e7b7baca4)): ?>
<?php $attributes = $__attributesOriginal8c392c2543387e7715c9099e7b7baca4; ?>
<?php unset($__attributesOriginal8c392c2543387e7715c9099e7b7baca4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8c392c2543387e7715c9099e7b7baca4)): ?>
<?php $component = $__componentOriginal8c392c2543387e7715c9099e7b7baca4; ?>
<?php unset($__componentOriginal8c392c2543387e7715c9099e7b7baca4); ?>
<?php endif; ?>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/fields/range.blade.php ENDPATH**/ ?>