<?php if (isset($component)) { $__componentOriginal763a27087db85a939ef545d497e0f0a0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763a27087db85a939ef545d497e0f0a0 = $attributes; } ?>
<?php $component = MoonShine\Components\Thumbnails::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::thumbnails'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\Components\Thumbnails::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($value ?? null),'values' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($values ?? null)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763a27087db85a939ef545d497e0f0a0)): ?>
<?php $attributes = $__attributesOriginal763a27087db85a939ef545d497e0f0a0; ?>
<?php unset($__attributesOriginal763a27087db85a939ef545d497e0f0a0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763a27087db85a939ef545d497e0f0a0)): ?>
<?php $component = $__componentOriginal763a27087db85a939ef545d497e0f0a0; ?>
<?php unset($__componentOriginal763a27087db85a939ef545d497e0f0a0); ?>
<?php endif; ?>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/ui/image.blade.php ENDPATH**/ ?>