<?php if (isset($component)) { $__componentOriginal907a9c03c99069df6c25a34488f7ce8f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal907a9c03c99069df6c25a34488f7ce8f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.switcher','data' => ['attributes' => $element->attributes(),'id' => $element->id(),'name' => $element->name(),'onValue' => $element->getOnValue(),'offValue' => $element->getOffValue(),'value' => ($element->getOnValue() == $value ? $element->getOnValue() : $element->getOffValue()),'checked' => $element->isChecked(),'class' => \Illuminate\Support\Arr::toCssClasses(['form-invalid' => formErrors($errors ?? false, $element->getFormName())->has($element->name())])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form.switcher'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->attributes()),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->id()),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->name()),'onValue' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->getOnValue()),'offValue' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->getOffValue()),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(($element->getOnValue() == $value ? $element->getOnValue() : $element->getOffValue())),'checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->isChecked()),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses(['form-invalid' => formErrors($errors ?? false, $element->getFormName())->has($element->name())]))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal907a9c03c99069df6c25a34488f7ce8f)): ?>
<?php $attributes = $__attributesOriginal907a9c03c99069df6c25a34488f7ce8f; ?>
<?php unset($__attributesOriginal907a9c03c99069df6c25a34488f7ce8f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal907a9c03c99069df6c25a34488f7ce8f)): ?>
<?php $component = $__componentOriginal907a9c03c99069df6c25a34488f7ce8f; ?>
<?php unset($__componentOriginal907a9c03c99069df6c25a34488f7ce8f); ?>
<?php endif; ?>
<?php /**PATH /var/www/vendor/moonshine/moonshine/src/Providers/../../resources/views/fields/switch.blade.php ENDPATH**/ ?>