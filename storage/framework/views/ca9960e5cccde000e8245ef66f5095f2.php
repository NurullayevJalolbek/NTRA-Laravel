<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'rows',
    'hasActions' => false,
    'vertical' => false,
    'editable' => false,
    'preview' => false,
    'simple' => false,
    'hasClickAction' => false,
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
    'hasActions' => false,
    'vertical' => false,
    'editable' => false,
    'preview' => false,
    'simple' => false,
    'hasClickAction' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr <?php echo e($row->trAttributes($loop->index)); ?> data-row-key="<?php echo e($row->getKey()); ?>">
        <?php if(!$preview && $hasActions): ?>
            <td <?php echo e($row->tdAttributes($loop->index, 0)
                ->merge(['class' => 'w-10 text-center'])); ?>

                <?php if($vertical): ?> width="5%" <?php endif; ?>
            >
                <?php if (isset($component)) { $__componentOriginal14a9cb58f632607a286ccbee397ec70f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal14a9cb58f632607a286ccbee397ec70f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.input','data' => ['type' => 'checkbox','autocomplete' => 'off','@change' => 'actions(\'row\', $id(\'table-component\'))','name' => 'items['.e($row->getKey()).']','class' => 'tableActionRow',':class' => '$id(\'table-component\') + \'-tableActionRow\'','value' => ''.e($row->getKey()).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'checkbox','autocomplete' => 'off','@change' => 'actions(\'row\', $id(\'table-component\'))','name' => 'items['.e($row->getKey()).']','class' => 'tableActionRow',':class' => '$id(\'table-component\') + \'-tableActionRow\'','value' => ''.e($row->getKey()).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal14a9cb58f632607a286ccbee397ec70f)): ?>
<?php $attributes = $__attributesOriginal14a9cb58f632607a286ccbee397ec70f; ?>
<?php unset($__attributesOriginal14a9cb58f632607a286ccbee397ec70f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal14a9cb58f632607a286ccbee397ec70f)): ?>
<?php $component = $__componentOriginal14a9cb58f632607a286ccbee397ec70f; ?>
<?php unset($__componentOriginal14a9cb58f632607a286ccbee397ec70f); ?>
<?php endif; ?>
            </td>
        <?php endif; ?>

        <?php if($vertical && !$preview): ?>
            <td
                <?php echo e($row->tdAttributes($vertical ? 0 : $loop->parent->index, 0 + $hasActions)
                    ->class(['space-y-3'])); ?>

            >
                <?php $__currentLoopData = $row->getFields(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($field->isSee($field->toValue())): ?>
                        <?php echo !$field->isForcePreview() && $editable ? $field->getBeforeRender() : ''; ?>

                        <?php if (isset($component)) { $__componentOriginal235f67923f05d9b0d0b555b07fb3c602 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal235f67923f05d9b0d0b555b07fb3c602 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.field-container','data' => ['field' => $field]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::field-container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($field)]); ?>
                            <?php echo $field->{!$field->isForcePreview() && $editable ? 'render' : 'preview'}(); ?>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal235f67923f05d9b0d0b555b07fb3c602)): ?>
<?php $attributes = $__attributesOriginal235f67923f05d9b0d0b555b07fb3c602; ?>
<?php unset($__attributesOriginal235f67923f05d9b0d0b555b07fb3c602); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal235f67923f05d9b0d0b555b07fb3c602)): ?>
<?php $component = $__componentOriginal235f67923f05d9b0d0b555b07fb3c602; ?>
<?php unset($__componentOriginal235f67923f05d9b0d0b555b07fb3c602); ?>
<?php endif; ?>
                        <?php echo !$field->isForcePreview() && $editable ? $field->getAfterRender() : ''; ?>

                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </td>
        <?php else: ?>
            <?php $__currentLoopData = $row->getFields(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($vertical): ?> <tr <?php echo e($row->trAttributes($index)); ?>>
                    <td <?php echo e($row->tdAttributes($index, 0)); ?>>
                        <?php echo e($field->label()); ?>

                    </td>
                    <?php endif; ?>

                    <td <?php echo e($vertical
                            ? $row->tdAttributes($index, 1)
                            : $row->tdAttributes($loop->parent->index, $index + $hasActions)
                                ->merge(['data-column-selection' => $field->id()])); ?>

                        <?php if(!$vertical && $hasClickAction): ?>
                            :class="'cursor-pointer'"
                            @click.stop="rowClickAction"
                        <?php endif; ?>
                    >
                        <?php if($field->isSee($field->toValue())): ?>
                            <?php echo !$field->isForcePreview() && $editable ? $field->getBeforeRender() : ''; ?>

                            <?php echo $field->{!$field->isForcePreview() && $editable ? 'render' : 'preview'}(); ?>

                            <?php echo !$field->isForcePreview() && $editable ? $field->getAfterRender() : ''; ?>

                        <?php endif; ?>
                    </td>

                    <?php if($vertical): ?>
                </tr>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

        <?php if(!$preview): ?>
            <td <?php echo e($row->tdAttributes($loop->index, $row->getFields()->count() + $hasActions)); ?>

                <?php if($vertical): ?> width="5%" <?php endif; ?>
            >
                <?php if($row->getActions()->isNotEmpty()): ?>
                    <?php if (isset($component)) { $__componentOriginalf9fe3ea351e3da6915d0427385e47546 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf9fe3ea351e3da6915d0427385e47546 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.table.actions','data' => ['simple' => $simple,'actions' => $row->getActions()]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::table.actions'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['simple' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($simple),'actions' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($row->getActions())]); ?>
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
                <?php endif; ?>
            </td>
        <?php endif; ?>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/components/table/body.blade.php ENDPATH**/ ?>