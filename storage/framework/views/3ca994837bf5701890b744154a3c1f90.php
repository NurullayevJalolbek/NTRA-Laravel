<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'rows',
    'actions'
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
    'rows',
    'actions'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<td colspan="<?php echo e(count($rows)+2); ?>"
    :class="$id('table-component') + '-bulkActions'"
>
    <div class="flex items-center gap-4">
        <?php if (isset($component)) { $__componentOriginalf9fe3ea351e3da6915d0427385e47546 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf9fe3ea351e3da6915d0427385e47546 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.table.actions','data' => ['actions' => $actions]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::table.actions'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['actions' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($actions)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf9fe3ea351e3da6915d0427385e47546)): ?>
<?php $attributes = $__attributesOriginalf9fe3ea351e3da6915d0427385e47546; ?>
<?php unset($__attributesOriginalf9fe3ea351e3da6915d0427385e47546); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf9fe3ea351e3da6915d0427385e47546)): ?>
<?php $component = $__componentOriginalf9fe3ea351e3da6915d0427385e47546; ?>
<?php unset($__componentOriginalf9fe3ea351e3da6915d0427385e47546); ?>
<?php endif; ?>
    </div>
</td>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/components/table/foot.blade.php ENDPATH**/ ?>