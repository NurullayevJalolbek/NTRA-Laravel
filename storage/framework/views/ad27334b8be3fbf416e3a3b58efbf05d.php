<?php if(is_bool($value)): ?>
    <?php if (isset($component)) { $__componentOriginalb66ff518c608c513903e458b81a24af9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb66ff518c608c513903e458b81a24af9 = $attributes; } ?>
<?php $component = MoonShine\Components\Boolean::resolve(['value' => $value] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::boolean'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\Components\Boolean::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb66ff518c608c513903e458b81a24af9)): ?>
<?php $attributes = $__attributesOriginalb66ff518c608c513903e458b81a24af9; ?>
<?php unset($__attributesOriginalb66ff518c608c513903e458b81a24af9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb66ff518c608c513903e458b81a24af9)): ?>
<?php $component = $__componentOriginalb66ff518c608c513903e458b81a24af9; ?>
<?php unset($__componentOriginalb66ff518c608c513903e458b81a24af9); ?>
<?php endif; ?>
<?php endif; ?>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/ui/boolean.blade.php ENDPATH**/ ?>