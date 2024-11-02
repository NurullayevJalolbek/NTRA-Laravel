<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'tabs',
    'contents' => [],
    'active' => null,
    'justifyAlign' => 'start',
    'isVertical' => false,
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
    'tabs',
    'contents' => [],
    'active' => null,
    'justifyAlign' => 'start',
    'isVertical' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php if($tabs): ?>
    <?php
        if ($contents === []) {
            $tabs = collect($tabs)
                ->mapWithKeys(fn($value, $name) => [Str::camel($name) => $value])
                ->all();

            $contents = collect($__laravel_slots ?? [])
                ->mapWithKeys(fn($contentSlot, $name) => [Str::camel($name) => $contentSlot])
                ->filter(fn($contentSlot, $name) => array_key_exists($name, $tabs))
                ->all();
        }
    ?>

    <!-- Tabs -->
    <div <?php echo e($attributes->class(['tabs'])); ?>

        x-data="tabs(
            '<?php echo e($active ?? array_key_first($tabs)); ?>',
            <?php echo e($isVertical ? 'true' : 'false'); ?>

        )"
    >
        <!-- Tabs Buttons -->
        <ul class="<?php echo \Illuminate\Support\Arr::toCssClasses(['tabs-list', 'justify-' . $justifyAlign]); ?>">
            <?php $__currentLoopData = $tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tabId => $tabContent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="tabs-item">
                    <button
                        @click.prevent="setActiveTab(`<?php echo e($tabId); ?>`)"
                        :class="{ '_is-active': activeTab === '<?php echo e($tabId); ?>' }"
                        class="tabs-button"
                        type="button"
                    >
                        <?php echo $tabContent; ?>

                    </button>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <!-- END: Tabs Buttons -->

        <!-- Tabs content -->
        <div class="tabs-content">
            <?php $__currentLoopData = $contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tabId => $tabContent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div
                    :class="activeTab === '<?php echo e($tabId); ?>' ? 'block' : 'hidden'"
                    class="tab-panel"
                    @set-active-tab="setActiveTab(`<?php echo e($tabId); ?>`)"
                >
                    <div class="tabs-body">
                        <?php echo $tabContent; ?>

                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <!-- END: Tabs content -->
    </div>
    <!-- END: Tabs -->
<?php endif; ?>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/components/tabs.blade.php ENDPATH**/ ?>