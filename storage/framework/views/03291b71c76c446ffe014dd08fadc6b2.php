<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'item',
    'top' => false,
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
    'item',
    'top' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<li
    <?php echo e($item->attributes()->class(['menu-inner-item', 'dropdown' => $top])); ?>

    <?php if($top): ?>
        x-data="dropdown"
        x-ref="dropdownEl"
        @click.outside="closeDropdown"
        data-dropdown-placement="bottom-start"
    <?php else: ?>
        x-data="{ dropdown: <?php echo e($item->isActive() ? 'true' : 'false'); ?> }"
    <?php endif; ?>
>
    <button
        <?php echo e($item->linkAttributes()->class(['menu-inner-button', 'dropdown-btn' => $top])); ?>

        <?php if($top): ?>
            @click="toggleDropdown"
            :class="open && '_is-active'"
        <?php else: ?>
            x-data="navTooltip"
            @mouseenter="toggleTooltip()"
            @click.prevent="dropdown = ! dropdown"
            :class="dropdown && '_is-active'"
        <?php endif; ?>
        type="button"
    >
        <?php if($item->iconValue()): ?>
            <?php echo $item->getIcon(6); ?>

        <?php elseif(!$top): ?>
            <span class="menu-inner-item-char">
                <?php echo e(str($item->label())->limit(2)); ?>

            </span>
        <?php endif; ?>

        <span class="menu-inner-text"><?php echo e($item->label()); ?></span>
        <span class="menu-inner-arrow">
            <?php if (isset($component)) { $__componentOriginal02cd8db43c93f795a84d3988e7d5cfee = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal02cd8db43c93f795a84d3988e7d5cfee = $attributes; } ?>
<?php $component = MoonShine\Components\Icon::resolve(['icon' => 'heroicons.chevron-down','size' => '6','color' => 'gray'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
        </span>
    </button>

    <?php if($item->items()): ?>
        <!-- Dropdown Menu -->
        <ul
            <?php if($top): ?>
                class="menu-inner-dropdown dropdown-body"
            <?php else: ?>
                class="menu-inner-dropdown"
                style="display: none"
                x-show="dropdown"
                x-transition.top
            <?php endif; ?>
        >
            <?php $__currentLoopData = $item->items(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($child->hasCustomView()): ?>
                    <?php echo $__env->make($child->getCustomView(), ['item' => $child, 'top' => $top], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php elseif($child->isGroup()): ?>
                    <?php if (isset($component)) { $__componentOriginal4f6a1cfae5a75510012f5aeed797a085 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4f6a1cfae5a75510012f5aeed797a085 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.menu.group','data' => ['item' => $child]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::menu.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['item' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($child)]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.menu.item','data' => ['item' => $child]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::menu.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['item' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($child)]); ?>
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
        <!-- END: Dropdown Menu -->
    <?php endif; ?>
</li>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/components/menu/group.blade.php ENDPATH**/ ?>