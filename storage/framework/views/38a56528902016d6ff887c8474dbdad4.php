<?php $__env->startSection('title', $title); ?>

<?php if (isset($component)) { $__componentOriginal30192403c563d6615e0db8bac1dd5fc3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal30192403c563d6615e0db8bac1dd5fc3 = $attributes; } ?>
<?php $component = MoonShine\Components\Title::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\Components\Title::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => ''.e(isset($subTitle) && $subTitle ?: 'mb-6').'']); ?>
    <?php echo e($title); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal30192403c563d6615e0db8bac1dd5fc3)): ?>
<?php $attributes = $__attributesOriginal30192403c563d6615e0db8bac1dd5fc3; ?>
<?php unset($__attributesOriginal30192403c563d6615e0db8bac1dd5fc3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal30192403c563d6615e0db8bac1dd5fc3)): ?>
<?php $component = $__componentOriginal30192403c563d6615e0db8bac1dd5fc3; ?>
<?php unset($__componentOriginal30192403c563d6615e0db8bac1dd5fc3); ?>
<?php endif; ?>

<?php if($subTitle ?? false): ?>
    <div class="pt-2 mb-6"><?php echo $subTitle; ?></div>
<?php endif; ?>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/layouts/shared/title.blade.php ENDPATH**/ ?>