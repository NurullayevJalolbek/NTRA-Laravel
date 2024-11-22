<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'components',
    'bulkButtons',
    'asyncUrl',
    'async' => false,
    'simplePaginate' => false,
    'notfound' => false,
    'colSpan' => 12,
    'adaptiveColSpan' => 12,
    'name' => 'default'
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
    'components',
    'bulkButtons',
    'asyncUrl',
    'async' => false,
    'simplePaginate' => false,
    'notfound' => false,
    'colSpan' => 12,
    'adaptiveColSpan' => 12,
    'name' => 'default'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div x-data="cardsBuilder(
    <?php echo e((int) $async); ?>,
    '<?php echo e($asyncUrl); ?>'
)"
    data-pushstate="<?php echo e($attributes->get('data-pushstate', false)); ?>"
    <?php echo MoonShine\Support\AlpineJs::eventBladeWhen($async, 'cards-updated', $name, 'asyncRequest'); ?>
    <?php echo e($attributes->only(['data-events'])); ?>

>
    <?php if (isset($component)) { $__componentOriginal879dcdea788ffa383131dbf9a35ec128 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal879dcdea788ffa383131dbf9a35ec128 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.loader','data' => ['xShow' => 'loading']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::loader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-show' => 'loading']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal879dcdea788ffa383131dbf9a35ec128)): ?>
<?php $attributes = $__attributesOriginal879dcdea788ffa383131dbf9a35ec128; ?>
<?php unset($__attributesOriginal879dcdea788ffa383131dbf9a35ec128); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal879dcdea788ffa383131dbf9a35ec128)): ?>
<?php $component = $__componentOriginal879dcdea788ffa383131dbf9a35ec128; ?>
<?php unset($__componentOriginal879dcdea788ffa383131dbf9a35ec128); ?>
<?php endif; ?>
    <div x-show="!loading">
        <?php if($components->isNotEmpty()): ?>
            <?php if (isset($component)) { $__componentOriginal17d49b4d1d6c04451d0077c615d6f998 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal17d49b4d1d6c04451d0077c615d6f998 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.grid','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::grid'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php $__currentLoopData = $components; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(!isSeeWhenExists($card)) continue; ?>

                    <?php if (isset($component)) { $__componentOriginalcb6bf9de1e25ea4a4d0411ec83a8d78e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcb6bf9de1e25ea4a4d0411ec83a8d78e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.column','data' => ['colSpan' => $colSpan,'adaptiveColSpan' => $adaptiveColSpan]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['colSpan' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($colSpan),'adaptiveColSpan' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($adaptiveColSpan)]); ?>
                        <?php echo e($card->render()); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcb6bf9de1e25ea4a4d0411ec83a8d78e)): ?>
<?php $attributes = $__attributesOriginalcb6bf9de1e25ea4a4d0411ec83a8d78e; ?>
<?php unset($__attributesOriginalcb6bf9de1e25ea4a4d0411ec83a8d78e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcb6bf9de1e25ea4a4d0411ec83a8d78e)): ?>
<?php $component = $__componentOriginalcb6bf9de1e25ea4a4d0411ec83a8d78e; ?>
<?php unset($__componentOriginalcb6bf9de1e25ea4a4d0411ec83a8d78e); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal17d49b4d1d6c04451d0077c615d6f998)): ?>
<?php $attributes = $__attributesOriginal17d49b4d1d6c04451d0077c615d6f998; ?>
<?php unset($__attributesOriginal17d49b4d1d6c04451d0077c615d6f998); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal17d49b4d1d6c04451d0077c615d6f998)): ?>
<?php $component = $__componentOriginal17d49b4d1d6c04451d0077c615d6f998; ?>
<?php unset($__componentOriginal17d49b4d1d6c04451d0077c615d6f998); ?>
<?php endif; ?>

            <?php if($hasPaginator): ?>
                <?php echo e($paginator->links(
                    $simplePaginate
                        ? 'moonshine::ui.simple-pagination'
                        : 'moonshine::ui.pagination',
                    ['async' => $async]
                )); ?>

            <?php endif; ?>
        <?php else: ?>
            <?php if (isset($component)) { $__componentOriginal3313f0c63d1b3ed042b48e2b7aff80be = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3313f0c63d1b3ed042b48e2b7aff80be = $attributes; } ?>
<?php $component = MoonShine\Components\Alert::resolve(['type' => 'default','icon' => 'heroicons.no-symbol'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\Components\Alert::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'my-4']); ?>
                <?php echo e(trans('moonshine::ui.notfound')); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3313f0c63d1b3ed042b48e2b7aff80be)): ?>
<?php $attributes = $__attributesOriginal3313f0c63d1b3ed042b48e2b7aff80be; ?>
<?php unset($__attributesOriginal3313f0c63d1b3ed042b48e2b7aff80be); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3313f0c63d1b3ed042b48e2b7aff80be)): ?>
<?php $component = $__componentOriginal3313f0c63d1b3ed042b48e2b7aff80be; ?>
<?php unset($__componentOriginal3313f0c63d1b3ed042b48e2b7aff80be); ?>
<?php endif; ?>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/components/cards.blade.php ENDPATH**/ ?>