<?php if (isset($component)) { $__componentOriginal0b1c029fb647fd8105b485912b5c1246 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0b1c029fb647fd8105b485912b5c1246 = $attributes; } ?>
<?php $component = MoonShine\Components\Rating::resolve(['min' => '1','max' => '5','value' => $value] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::rating'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\Components\Rating::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0b1c029fb647fd8105b485912b5c1246)): ?>
<?php $attributes = $__attributesOriginal0b1c029fb647fd8105b485912b5c1246; ?>
<?php unset($__attributesOriginal0b1c029fb647fd8105b485912b5c1246); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0b1c029fb647fd8105b485912b5c1246)): ?>
<?php $component = $__componentOriginal0b1c029fb647fd8105b485912b5c1246; ?>
<?php unset($__componentOriginal0b1c029fb647fd8105b485912b5c1246); ?>
<?php endif; ?>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/ui/rating.blade.php ENDPATH**/ ?>