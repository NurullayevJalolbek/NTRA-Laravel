<?php if (isset($component)) { $__componentOriginal3825f02f08a95f1669c51634b2e511ec = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3825f02f08a95f1669c51634b2e511ec = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.collapse','data' => ['open' => $element->isOpen(),'title' => $element->label(),'icon' => $element->iconValue(),'persist' => $element->isPersist(),'attributes' => $attributes]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::collapse'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['open' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->isOpen()),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->label()),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->iconValue()),'persist' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->isPersist()),'attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes)]); ?>
    <?php if (isset($component)) { $__componentOriginalbe9b282893bab4ef9e234898f6c1bda7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbe9b282893bab4ef9e234898f6c1bda7 = $attributes; } ?>
<?php $component = MoonShine\Components\FieldsGroup::resolve(['components' => $element->getFields()] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::fields-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\Components\FieldsGroup::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['container' => true]); ?>
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
<?php if (isset($__attributesOriginal3825f02f08a95f1669c51634b2e511ec)): ?>
<?php $attributes = $__attributesOriginal3825f02f08a95f1669c51634b2e511ec; ?>
<?php unset($__attributesOriginal3825f02f08a95f1669c51634b2e511ec); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3825f02f08a95f1669c51634b2e511ec)): ?>
<?php $component = $__componentOriginal3825f02f08a95f1669c51634b2e511ec; ?>
<?php unset($__componentOriginal3825f02f08a95f1669c51634b2e511ec); ?>
<?php endif; ?>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/decorations/collapse.blade.php ENDPATH**/ ?>