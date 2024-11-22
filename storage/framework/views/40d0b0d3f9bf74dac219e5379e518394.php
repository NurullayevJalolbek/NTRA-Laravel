<?php if (isset($component)) { $__componentOriginale0fb811781c4ce8a33d518277d23e979 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale0fb811781c4ce8a33d518277d23e979 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.pagination','data' => ['paginator' => $paginator,'elements' => $elements,'async' => $async]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::pagination'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['paginator' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($paginator),'elements' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($elements),'async' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($async)]); ?>
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
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/ui/pagination.blade.php ENDPATH**/ ?>