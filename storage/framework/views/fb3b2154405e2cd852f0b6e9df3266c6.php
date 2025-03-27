<div x-data="{morphType: '<?php echo e($element->typeValue()); ?>'}" class="flex items-center gap-x-2">
    <div class="sm:w-1/4 w-full">
        <?php if (isset($component)) { $__componentOriginal73c6f62b756759d0cfcff0c734cdf46b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73c6f62b756759d0cfcff0c734cdf46b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.select','data' => ['name' => str($element->name())->replace($element->column(), $element->getMorphType()),'xModel' => 'morphType','required' => 'required','value' => $element->typeValue(),'values' => $element->getTypes()]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(str($element->name())->replace($element->column(), $element->getMorphType())),'x-model' => 'morphType','required' => 'required','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->typeValue()),'values' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->getTypes())]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73c6f62b756759d0cfcff0c734cdf46b)): ?>
<?php $attributes = $__attributesOriginal73c6f62b756759d0cfcff0c734cdf46b; ?>
<?php unset($__attributesOriginal73c6f62b756759d0cfcff0c734cdf46b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73c6f62b756759d0cfcff0c734cdf46b)): ?>
<?php $component = $__componentOriginal73c6f62b756759d0cfcff0c734cdf46b; ?>
<?php unset($__componentOriginal73c6f62b756759d0cfcff0c734cdf46b); ?>
<?php endif; ?>
    </div>

    <div class="sm:w-3/4 w-full">
        <?php if (isset($component)) { $__componentOriginal73c6f62b756759d0cfcff0c734cdf46b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73c6f62b756759d0cfcff0c734cdf46b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.select','data' => ['attributes' => $element->attributes()->merge([
                'id' => $element->id(),
                'name' => $element->name(),
            ]),'nullable' => $element->isNullable(),'searchable' => true,'class' => \Illuminate\Support\Arr::toCssClasses(['form-invalid' => $errors->{$element->getFormName()}->has($element->name())]),'xBind:dataAsyncExtra' => 'morphType','value' => $value,'values' => $element->values(),'asyncRoute' => $element->isAsyncSearch() ? $element->asyncSearchUrl() : null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->attributes()->merge([
                'id' => $element->id(),
                'name' => $element->name(),
            ])),'nullable' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->isNullable()),'searchable' => true,'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses(['form-invalid' => $errors->{$element->getFormName()}->has($element->name())])),'x-bind:data-async-extra' => 'morphType','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($value),'values' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->values()),'asyncRoute' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->isAsyncSearch() ? $element->asyncSearchUrl() : null)]); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73c6f62b756759d0cfcff0c734cdf46b)): ?>
<?php $attributes = $__attributesOriginal73c6f62b756759d0cfcff0c734cdf46b; ?>
<?php unset($__attributesOriginal73c6f62b756759d0cfcff0c734cdf46b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73c6f62b756759d0cfcff0c734cdf46b)): ?>
<?php $component = $__componentOriginal73c6f62b756759d0cfcff0c734cdf46b; ?>
<?php unset($__componentOriginal73c6f62b756759d0cfcff0c734cdf46b); ?>
<?php endif; ?>
    </div>

</div>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/fields/relationships/morph-to.blade.php ENDPATH**/ ?>