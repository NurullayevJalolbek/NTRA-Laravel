<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'data' => $_data ?? [],
    'top' => $isTop ?? false,
    'isScrollTo' => $isScrollTo ?? true,
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
    'data' => $_data ?? [],
    'top' => $isTop ?? false,
    'isScrollTo' => $isScrollTo ?? true,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php if($data): ?>
    <ul <?php echo e($attributes->class(['menu-inner'])); ?>

        <?php if(!$top && $isScrollTo): ?>
            x-init="$nextTick(() => $el.querySelector('.menu-inner-item._is-active')?.scrollIntoView())"
        <?php endif; ?>
    >
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($item->hasCustomView()): ?>
                <?php echo $__env->make($item->getCustomView(), ['item' => $item, 'top' => $top], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php elseif($item->isGroup()): ?>
                <?php if (isset($component)) { $__componentOriginal4f6a1cfae5a75510012f5aeed797a085 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4f6a1cfae5a75510012f5aeed797a085 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.menu.group','data' => ['item' => $item,'top' => $top]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::menu.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['item' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item),'top' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($top)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4f6a1cfae5a75510012f5aeed797a085)): ?>
<?php $attributes = $__attributesOriginal4f6a1cfae5a75510012f5aeed797a085; ?>
<?php unset($__attributesOriginal4f6a1cfae5a75510012f5aeed797a085); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4f6a1cfae5a75510012f5aeed797a085)): ?>
<?php $component = $__componentOriginal4f6a1cfae5a75510012f5aeed797a085; ?>
<?php unset($__componentOriginal4f6a1cfae5a75510012f5aeed797a085); ?>
<?php endif; ?>
            <?php else: ?>
                <?php if (isset($component)) { $__componentOriginal4f2a6f4ef27abaabae1ccdd859af4d7c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4f2a6f4ef27abaabae1ccdd859af4d7c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.menu.item','data' => ['item' => $item,'top' => $top]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::menu.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['item' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item),'top' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($top)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4f2a6f4ef27abaabae1ccdd859af4d7c)): ?>
<?php $attributes = $__attributesOriginal4f2a6f4ef27abaabae1ccdd859af4d7c; ?>
<?php unset($__attributesOriginal4f2a6f4ef27abaabae1ccdd859af4d7c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4f2a6f4ef27abaabae1ccdd859af4d7c)): ?>
<?php $component = $__componentOriginal4f2a6f4ef27abaabae1ccdd859af4d7c; ?>
<?php unset($__componentOriginal4f2a6f4ef27abaabae1ccdd859af4d7c); ?>
<?php endif; ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php endif; ?>

<?php echo e($slot ?? ''); ?>

<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/components/menu/index.blade.php ENDPATH**/ ?>