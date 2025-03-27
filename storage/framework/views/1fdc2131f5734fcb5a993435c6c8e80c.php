<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'persist' => false,
    'open' => false,
    'button' => null,
    'icon' => null,
    'title',
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
    'persist' => false,
    'open' => false,
    'button' => null,
    'icon' => null,
    'title',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<div
    <?php echo e($attributes->class(['accordion'])); ?>

    x-data="
        <?php if($persist): ?>
            collapse($persist(<?php echo e($open ? 'true' : 'false'); ?>).as($id('collapse')))
        <?php else: ?>
            collapse(<?php echo e($open ? 'true' : 'false'); ?>)
        <?php endif; ?>
    "
>
    <div
        class="accordion-item"
        :class="open ? 'mt-5' : 'my-5'"
    >
        <h2 class="accordion-header">
            <button type="button" @click.prevent="toggle()" :class="{ '_is-active': open }"
                    class="accordion-btn btn"
                    type="button"
            >
                <div class="flex gap-2">
                    <?php if($icon): ?>
                        <?php if (isset($component)) { $__componentOriginal02cd8db43c93f795a84d3988e7d5cfee = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal02cd8db43c93f795a84d3988e7d5cfee = $attributes; } ?>
<?php $component = MoonShine\Components\Icon::resolve(['icon' => $icon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                    <?php endif; ?>

                    <?php echo $title; ?>

                </div>

                <?php if($button ?? false): ?>
                    <?php echo $button; ?>

                <?php else: ?>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                <?php endif; ?>
            </button>
        </h2>
        <div
            x-cloak
            :class="open ? 'block' : 'hidden'"
             class="accordion-body"
        >
            <div class="accordion-content">
                <?php echo e($slot); ?>

            </div>
        </div>
    </div>
</div>

<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/components/collapse.blade.php ENDPATH**/ ?>