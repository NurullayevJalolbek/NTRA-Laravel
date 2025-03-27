<?php if (isset($component)) { $__componentOriginala437a89f2bff303d49237355b6d2a1cc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala437a89f2bff303d49237355b6d2a1cc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.box','data' => ['attributes' => $attributes,'title' => $element->label(),'icon' => $element->iconValue()]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::box'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->label()),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->iconValue())]); ?>
    <?php if (isset($component)) { $__componentOriginalbe9b282893bab4ef9e234898f6c1bda7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbe9b282893bab4ef9e234898f6c1bda7 = $attributes; } ?>
<?php $component = MoonShine\Components\FieldsGroup::resolve(['components' => $element->getFields()] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::fields-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\Components\FieldsGroup::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbe9b282893bab4ef9e234898f6c1bda7)): ?>
<?php $attributes = $__attributesOriginalbe9b282893bab4ef9e234898f6c1bda7; ?>
<?php unset($__attributesOriginalbe9b282893bab4ef9e234898f6c1bda7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbe9b282893bab4ef9e234898f6c1bda7)): ?>
<?php $component = $__componentOriginalbe9b282893bab4ef9e234898f6c1bda7; ?>
<?php unset($__componentOriginalbe9b282893bab4ef9e234898f6c1bda7); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala437a89f2bff303d49237355b6d2a1cc)): ?>
<?php $attributes = $__attributesOriginala437a89f2bff303d49237355b6d2a1cc; ?>
<?php unset($__attributesOriginala437a89f2bff303d49237355b6d2a1cc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala437a89f2bff303d49237355b6d2a1cc)): ?>
<?php $component = $__componentOriginala437a89f2bff303d49237355b6d2a1cc; ?>
<?php unset($__componentOriginala437a89f2bff303d49237355b6d2a1cc); ?>
<?php endif; ?>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/decorations/block.blade.php ENDPATH**/ ?>