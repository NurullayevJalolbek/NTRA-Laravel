<?php if (isset($component)) { $__componentOriginal7340d179764a28b1c85f803337bb70a1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7340d179764a28b1c85f803337bb70a1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.slide-range','data' => ['uniqueId' => $element->id(),'attributes' => $element->attributes(),'fromAttributes' => $element->getFromAttributes(),'toAttributes' => $element->getToAttributes(),'fromValue' => $value[$element->fromField] ?? $element->min,'toValue' => $value[$element->toField] ?? $element->max,'fromName' => ''.e($element->name($element->fromField)).'','toName' => ''.e($element->name($element->toField)).'','fromField' => ''.e($element->getNameDotFrom()).'','toField' => ''.e($element->getNameDotTo()).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form.slide-range'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['uniqueId' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->id()),'attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->attributes()),'fromAttributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->getFromAttributes()),'toAttributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->getToAttributes()),'fromValue' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($value[$element->fromField] ?? $element->min),'toValue' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($value[$element->toField] ?? $element->max),'fromName' => ''.e($element->name($element->fromField)).'','toName' => ''.e($element->name($element->toField)).'','fromField' => ''.e($element->getNameDotFrom()).'','toField' => ''.e($element->getNameDotTo()).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7340d179764a28b1c85f803337bb70a1)): ?>
<?php $attributes = $__attributesOriginal7340d179764a28b1c85f803337bb70a1; ?>
<?php unset($__attributesOriginal7340d179764a28b1c85f803337bb70a1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7340d179764a28b1c85f803337bb70a1)): ?>
<?php $component = $__componentOriginal7340d179764a28b1c85f803337bb70a1; ?>
<?php unset($__componentOriginal7340d179764a28b1c85f803337bb70a1); ?>
<?php endif; ?>

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
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/fields/slide.blade.php ENDPATH**/ ?>