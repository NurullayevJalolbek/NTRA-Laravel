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
        <?php if (isset($component)) { $__componentOriginaldb0aa0ab424f8c3a81a19074cea3d471 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldb0aa0ab424f8c3a81a19074cea3d471 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.metrics.line','data' => ['attributes' => $attributes->merge(['id' => $element->id()]),'lines' => $element->lines(),'colors' => $element->colors(),'labels' => $element->labels(),'title' => $element->label()]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::metrics.line'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes->merge(['id' => $element->id()])),'lines' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->lines()),'colors' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->colors()),'labels' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->labels()),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->label())]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldb0aa0ab424f8c3a81a19074cea3d471)): ?>
<?php $attributes = $__attributesOriginaldb0aa0ab424f8c3a81a19074cea3d471; ?>
<?php unset($__attributesOriginaldb0aa0ab424f8c3a81a19074cea3d471); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldb0aa0ab424f8c3a81a19074cea3d471)): ?>
<?php $component = $__componentOriginaldb0aa0ab424f8c3a81a19074cea3d471; ?>
<?php unset($__componentOriginaldb0aa0ab424f8c3a81a19074cea3d471); ?>
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


<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/metrics/line-chart.blade.php ENDPATH**/ ?>