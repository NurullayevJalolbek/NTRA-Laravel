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
<?php if($item instanceof MoonShine\Menu\MenuDivider): ?>
    <li <?php echo e($item->attributes()->merge(['class' => 'menu-inner-divider'])); ?>>
        <?php echo $item->label() ? "<span>{$item->label()}</span>" : ''; ?>

    </li>
<?php else: ?>
    <li <?php echo e($item->attributes()->class(['menu-inner-item', '_is-active' => $item->isActive()])); ?>>
        <a
            href="<?php echo e($item->url()); ?>" <?php echo $item->isBlank() ? 'target="_blank"' : ''; ?>

            <?php echo e($item->linkAttributes()->merge(['class' => 'menu-inner-link'])); ?>

            x-data="navTooltip"
            @mouseenter="toggleTooltip()"
        >
            <?php if($item->iconValue()): ?>
                <?php echo $item->getIcon(6); ?>

            <?php elseif(!$top): ?>
                <span class="menu-inner-item-char">
                    <?php echo e(str($item->label())->limit(2)); ?>

                </span>
            <?php endif; ?>

            <span class="menu-inner-text"><?php echo e($item->label()); ?></span>

            <?php if($item->hasBadge() && $badge = $item->getBadge()): ?>
                <span class="menu-inner-counter"><?php echo e($badge); ?></span>
            <?php endif; ?>
        </a>
    </li>
<?php endif; ?>
<?php /**PATH /var/www/vendor/moonshine/moonshine/src/Providers/../../resources/views/components/menu/item.blade.php ENDPATH**/ ?>