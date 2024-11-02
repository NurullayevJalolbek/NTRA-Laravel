<?php if (isset($component)) { $__componentOriginal73c6f62b756759d0cfcff0c734cdf46b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73c6f62b756759d0cfcff0c734cdf46b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.select','data' => ['attributes' => $element->attributes()->merge([
        'id' => $element->id(),
        'name' => $element->name(),
    ]),'nullable' => $element->isNullable(),'searchable' => $element->isSearchable(),'asyncRoute' => $element->asyncUrl(),'native' => $element->isNative(),'class' => \Illuminate\Support\Arr::toCssClasses(['form-invalid' => formErrors($errors ?? false, $element->getFormName())->has($element->name())])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->attributes()->merge([
        'id' => $element->id(),
        'name' => $element->name(),
    ])),'nullable' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->isNullable()),'searchable' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->isSearchable()),'asyncRoute' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->asyncUrl()),'native' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->isNative()),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses(['form-invalid' => formErrors($errors ?? false, $element->getFormName())->has($element->name())]))]); ?>
     <?php $__env->slot('options', null, []); ?> 
        <?php if($element->isNullable()): ?>
            <option value=""><?php echo e($element->attributes()->get('placeholder', '-')); ?></option>
        <?php endif; ?>
        <?php $__currentLoopData = $element->values(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $optionValue => $optionName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(is_array($optionName)): ?>
                <optgroup label="<?php echo e($optionValue); ?>">
                    <?php $__currentLoopData = $optionName; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $oValue => $oName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option <?php if($element->isSelected($oValue)): echo 'selected'; endif; ?>
                                value="<?php echo e($oValue); ?>"
                                data-custom-properties='<?php echo json_encode($element->getOptionProperties($oValue), 15, 512) ?>'
                        >
                            <?php echo e($oName); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </optgroup>
            <?php else: ?>
                <option <?php if($element->isSelected($optionValue)): echo 'selected'; endif; ?>
                        value="<?php echo e($optionValue); ?>"
                        data-custom-properties='<?php echo json_encode($element->getOptionProperties($optionValue), 15, 512) ?>'
                >
                    <?php echo e($optionName); ?>

                </option>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     <?php $__env->endSlot(); ?>
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
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/fields/select.blade.php ENDPATH**/ ?>