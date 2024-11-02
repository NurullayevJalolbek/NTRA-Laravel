<?php if (isset($component)) { $__componentOriginale0fb811781c4ce8a33d518277d23e979 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale0fb811781c4ce8a33d518277d23e979 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.pagination','data' => ['paginator' => $paginator,'async' => $async,'simple' => true,'system' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::pagination'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['paginator' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($paginator),'async' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($async),'simple' => true,'system' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale0fb811781c4ce8a33d518277d23e979)): ?>
<?php $attributes = $__attributesOriginale0fb811781c4ce8a33d518277d23e979; ?>
<?php unset($__attributesOriginale0fb811781c4ce8a33d518277d23e979); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale0fb811781c4ce8a33d518277d23e979)): ?>
<?php $component = $__componentOriginale0fb811781c4ce8a33d518277d23e979; ?>
<?php unset($__componentOriginale0fb811781c4ce8a33d518277d23e979); ?>
<?php endif; ?>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/ui/simple-pagination.blade.php ENDPATH**/ ?>