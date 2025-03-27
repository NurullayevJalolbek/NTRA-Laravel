<?php if (isset($component)) { $__componentOriginalcb6bf9de1e25ea4a4d0411ec83a8d78e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcb6bf9de1e25ea4a4d0411ec83a8d78e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.column','data' => ['colSpan' => $element->columnSpanValue(),'adaptiveColSpan' => $element->adaptiveColumnSpanValue(),'xmlns:xMoonshine' => 'http://www.w3.org/1999/html']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['colSpan' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->columnSpanValue()),'adaptiveColSpan' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->adaptiveColumnSpanValue()),'xmlns:x-moonshine' => 'http://www.w3.org/1999/html']); ?>
    <?php if (isset($component)) { $__componentOriginala437a89f2bff303d49237355b6d2a1cc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala437a89f2bff303d49237355b6d2a1cc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.box','data' => ['class' => 'box-shadow zoom-in h-full p-0']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::box'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'box-shadow zoom-in h-full p-0']); ?>
        <?php if (isset($component)) { $__componentOriginalfa3a0c656c7eea1a783a0f2a45de50e3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfa3a0c656c7eea1a783a0f2a45de50e3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.metrics.value','data' => ['attributes' => $attributes,'title' => $element->label(),'icon' => $element->getIcon(6, 'secondary'),'progress' => $element->isProgress(),'value' => $element->valueResult(),'simpleValue' => $element->simpleValue()]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::metrics.value'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->label()),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->getIcon(6, 'secondary')),'progress' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->isProgress()),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->valueResult()),'simpleValue' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->simpleValue())]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfa3a0c656c7eea1a783a0f2a45de50e3)): ?>
<?php $attributes = $__attributesOriginalfa3a0c656c7eea1a783a0f2a45de50e3; ?>
<?php unset($__attributesOriginalfa3a0c656c7eea1a783a0f2a45de50e3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfa3a0c656c7eea1a783a0f2a45de50e3)): ?>
<?php $component = $__componentOriginalfa3a0c656c7eea1a783a0f2a45de50e3; ?>
<?php unset($__componentOriginalfa3a0c656c7eea1a783a0f2a45de50e3); ?>
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
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcb6bf9de1e25ea4a4d0411ec83a8d78e)): ?>
<?php $attributes = $__attributesOriginalcb6bf9de1e25ea4a4d0411ec83a8d78e; ?>
<?php unset($__attributesOriginalcb6bf9de1e25ea4a4d0411ec83a8d78e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcb6bf9de1e25ea4a4d0411ec83a8d78e)): ?>
<?php $component = $__componentOriginalcb6bf9de1e25ea4a4d0411ec83a8d78e; ?>
<?php unset($__componentOriginalcb6bf9de1e25ea4a4d0411ec83a8d78e); ?>
<?php endif; ?>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/metrics/value.blade.php ENDPATH**/ ?>