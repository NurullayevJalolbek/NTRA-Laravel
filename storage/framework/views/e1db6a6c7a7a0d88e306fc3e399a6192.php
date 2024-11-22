<?php if (isset($component)) { $__componentOriginalcb6bf9de1e25ea4a4d0411ec83a8d78e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcb6bf9de1e25ea4a4d0411ec83a8d78e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.column','data' => ['colSpan' => $element->columnSpanValue(),'adaptiveColSpan' => $element->adaptiveColumnSpanValue()]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['colSpan' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->columnSpanValue()),'adaptiveColSpan' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->adaptiveColumnSpanValue())]); ?>
    <?php if (isset($component)) { $__componentOriginala437a89f2bff303d49237355b6d2a1cc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala437a89f2bff303d49237355b6d2a1cc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.box','data' => ['class' => 'grow']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::box'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'grow']); ?>
        <?php if (isset($component)) { $__componentOriginal7390eb44a1c7e426f5e3e2718cef8ba8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7390eb44a1c7e426f5e3e2718cef8ba8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.metrics.donut','data' => ['attributes' => $attributes->merge(['id' => $element->id()]),'values' => $element->getValues(),'colors' => $element->getColors(),'decimals' => $element->getDecimals(),'labels' => $element->labels(),'title' => $element->label()]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::metrics.donut'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes->merge(['id' => $element->id()])),'values' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->getValues()),'colors' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->getColors()),'decimals' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->getDecimals()),'labels' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->labels()),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->label())]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7390eb44a1c7e426f5e3e2718cef8ba8)): ?>
<?php $attributes = $__attributesOriginal7390eb44a1c7e426f5e3e2718cef8ba8; ?>
<?php unset($__attributesOriginal7390eb44a1c7e426f5e3e2718cef8ba8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7390eb44a1c7e426f5e3e2718cef8ba8)): ?>
<?php $component = $__componentOriginal7390eb44a1c7e426f5e3e2718cef8ba8; ?>
<?php unset($__componentOriginal7390eb44a1c7e426f5e3e2718cef8ba8); ?>
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
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/metrics/donut-chart.blade.php ENDPATH**/ ?>