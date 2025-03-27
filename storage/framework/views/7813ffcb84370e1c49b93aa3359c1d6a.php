<?php if($element->isCreatable()): ?>
<?php echo $element->createButton(); ?>


<?php if (isset($component)) { $__componentOriginal5b3523037f393515dbb12b0b2c7450ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5b3523037f393515dbb12b0b2c7450ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.divider','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::divider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5b3523037f393515dbb12b0b2c7450ff)): ?>
<?php $attributes = $__attributesOriginal5b3523037f393515dbb12b0b2c7450ff; ?>
<?php unset($__attributesOriginal5b3523037f393515dbb12b0b2c7450ff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5b3523037f393515dbb12b0b2c7450ff)): ?>
<?php $component = $__componentOriginal5b3523037f393515dbb12b0b2c7450ff; ?>
<?php unset($__componentOriginal5b3523037f393515dbb12b0b2c7450ff); ?>
<?php endif; ?>

<?php $__env->startFragment($element->getRelationName()); ?>
<div x-data="fragment('<?php echo e($element->fragmentUrl()); ?>')"
<?php echo MoonShine\Support\AlpineJs::eventBlade('fragment-updated', $element->getRelationName(), 'fragmentUpdate'); ?>
>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginal73c6f62b756759d0cfcff0c734cdf46b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73c6f62b756759d0cfcff0c734cdf46b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.select','data' => ['attributes' => $element->attributes()->merge([
        'id' => $element->id(),
        'name' => $element->name(),
    ]),'nullable' => $element->isNullable(),'searchable' => $element->isSearchable(),'class' => \Illuminate\Support\Arr::toCssClasses(['form-invalid' => $errors->{$element->getFormName()}->has($element->name())]),'value' => $value,'values' => $element->values(),'customProperties' => $element->valuesWithProperties(onlyCustom: true),'asyncRoute' => $element->isAsyncSearch() ? $element->asyncSearchUrl() : null,'native' => $element->isNative()]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->attributes()->merge([
        'id' => $element->id(),
        'name' => $element->name(),
    ])),'nullable' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->isNullable()),'searchable' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->isSearchable()),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses(['form-invalid' => $errors->{$element->getFormName()}->has($element->name())])),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($value),'values' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->values()),'customProperties' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->valuesWithProperties(onlyCustom: true)),'asyncRoute' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->isAsyncSearch() ? $element->asyncSearchUrl() : null),'native' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->isNative())]); ?>
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

<?php if($element->isCreatable()): ?>
</div>
<?php echo $__env->stopFragment(); ?>
<?php endif; ?>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/fields/relationships/belongs-to.blade.php ENDPATH**/ ?>