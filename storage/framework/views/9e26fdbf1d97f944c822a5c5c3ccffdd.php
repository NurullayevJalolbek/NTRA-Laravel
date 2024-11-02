<?php if($value !== false): ?>
    <?php if (isset($component)) { $__componentOriginal0f84a35ac5116b2d6f172ab2d1c16403 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0f84a35ac5116b2d6f172ab2d1c16403 = $attributes; } ?>
<?php $component = MoonShine\Components\Badge::resolve(['color' => $color] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\Components\Badge::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => ''.e($margin ?? false ? 'm-1' : '').'']); ?>
        <?php if($link ?? false): ?>
            <?php if (isset($component)) { $__componentOriginal1713db97e40aee9fd53e09cb830715f7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1713db97e40aee9fd53e09cb830715f7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.link-native','data' => ['href' => ''.e($link).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::link-native'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e($link).'']); ?>
                <?php echo $value; ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1713db97e40aee9fd53e09cb830715f7)): ?>
<?php $attributes = $__attributesOriginal1713db97e40aee9fd53e09cb830715f7; ?>
<?php unset($__attributesOriginal1713db97e40aee9fd53e09cb830715f7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1713db97e40aee9fd53e09cb830715f7)): ?>
<?php $component = $__componentOriginal1713db97e40aee9fd53e09cb830715f7; ?>
<?php unset($__componentOriginal1713db97e40aee9fd53e09cb830715f7); ?>
<?php endif; ?>
        <?php else: ?>
            <?php echo $value; ?>

        <?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0f84a35ac5116b2d6f172ab2d1c16403)): ?>
<?php $attributes = $__attributesOriginal0f84a35ac5116b2d6f172ab2d1c16403; ?>
<?php unset($__attributesOriginal0f84a35ac5116b2d6f172ab2d1c16403); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0f84a35ac5116b2d6f172ab2d1c16403)): ?>
<?php $component = $__componentOriginal0f84a35ac5116b2d6f172ab2d1c16403; ?>
<?php unset($__componentOriginal0f84a35ac5116b2d6f172ab2d1c16403); ?>
<?php endif; ?>
<?php else: ?>
    &mdash;
<?php endif; ?>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/ui/badge.blade.php ENDPATH**/ ?>