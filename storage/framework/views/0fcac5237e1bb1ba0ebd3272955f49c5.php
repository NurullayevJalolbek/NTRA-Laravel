<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'actions' => []
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'actions' => []
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<div <?php echo e($attributes->merge(['class' => 'flex flex-wrap items-center gap-2'])); ?>>
    <?php if($actions->inDropdown()->isNotEmpty()): ?>
        <?php if (isset($component)) { $__componentOriginal72a1269c3b015b9696f9fb4cbf02b44f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal72a1269c3b015b9696f9fb4cbf02b44f = $attributes; } ?>
<?php $component = MoonShine\Components\Dropdown::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\Components\Dropdown::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
             <?php $__env->slot('toggler', null, ['class' => 'btn']); ?> 
                <?php if (isset($component)) { $__componentOriginal02cd8db43c93f795a84d3988e7d5cfee = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal02cd8db43c93f795a84d3988e7d5cfee = $attributes; } ?>
<?php $component = MoonShine\Components\Icon::resolve(['icon' => 'heroicons.ellipsis-vertical'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal02cd8db43c93f795a84d3988e7d5cfee)): ?>
<?php $attributes = $__attributesOriginal02cd8db43c93f795a84d3988e7d5cfee; ?>
<?php unset($__attributesOriginal02cd8db43c93f795a84d3988e7d5cfee); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal02cd8db43c93f795a84d3988e7d5cfee)): ?>
<?php $component = $__componentOriginal02cd8db43c93f795a84d3988e7d5cfee; ?>
<?php unset($__componentOriginal02cd8db43c93f795a84d3988e7d5cfee); ?>
<?php endif; ?>
             <?php $__env->endSlot(); ?>

            <ul class="dropdown-menu">
                <?php $__currentLoopData = $actions->inDropdown(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="dropdown-menu-item">
                        <?php echo e($action->render()); ?>

                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal72a1269c3b015b9696f9fb4cbf02b44f)): ?>
<?php $attributes = $__attributesOriginal72a1269c3b015b9696f9fb4cbf02b44f; ?>
<?php unset($__attributesOriginal72a1269c3b015b9696f9fb4cbf02b44f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal72a1269c3b015b9696f9fb4cbf02b44f)): ?>
<?php $component = $__componentOriginal72a1269c3b015b9696f9fb4cbf02b44f; ?>
<?php unset($__componentOriginal72a1269c3b015b9696f9fb4cbf02b44f); ?>
<?php endif; ?>
    <?php endif; ?>

    <?php if($actions->inLine()->isNotEmpty()): ?>
        <?php $__currentLoopData = $actions->inLine(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo e($action->render()); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</div>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/components/action-group.blade.php ENDPATH**/ ?>