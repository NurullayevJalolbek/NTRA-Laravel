<?php if (isset($component)) { $__componentOriginal7bc1cd036eea3c64034c1dc802f52c33 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7bc1cd036eea3c64034c1dc802f52c33 = $attributes; } ?>
<?php $component = MoonShine\Components\Breadcrumbs::resolve(['items' => collect($items)
        ->prepend(':::heroicons.outline.home', moonshineRouter()->home())
        ->toArray()] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::breadcrumbs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\Components\Breadcrumbs::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7bc1cd036eea3c64034c1dc802f52c33)): ?>
<?php $attributes = $__attributesOriginal7bc1cd036eea3c64034c1dc802f52c33; ?>
<?php unset($__attributesOriginal7bc1cd036eea3c64034c1dc802f52c33); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7bc1cd036eea3c64034c1dc802f52c33)): ?>
<?php $component = $__componentOriginal7bc1cd036eea3c64034c1dc802f52c33; ?>
<?php unset($__componentOriginal7bc1cd036eea3c64034c1dc802f52c33); ?>
<?php endif; ?>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/layouts/shared/breadcrumbs.blade.php ENDPATH**/ ?>