<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'current',
    'locales'
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
    'current',
    'locales'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php if($locales->isNotEmpty()): ?>
    <?php if (isset($component)) { $__componentOriginal72a1269c3b015b9696f9fb4cbf02b44f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal72a1269c3b015b9696f9fb4cbf02b44f = $attributes; } ?>
<?php $component = MoonShine\Components\Dropdown::resolve(['placement' => 'bottom-end'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\Components\Dropdown::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('toggler', null, []); ?> 
            <a class="dropdown-btn btn"><?php echo e($current); ?></a>
         <?php $__env->endSlot(); ?>

        <ul class="dropdown-menu">
            <?php $__currentLoopData = $locales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $href => $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="dropdown-menu-item">
                    <a
                        href="<?php echo e($href); ?>"
                        class="dropdown-menu-link"
                    >
                        <?php echo e($locale); ?>

                    </a>
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
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/layouts/shared/locales.blade.php ENDPATH**/ ?>