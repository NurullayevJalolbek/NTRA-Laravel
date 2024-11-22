<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'rows',
    'fields',
    'bulkButtons',
    'asyncUrl',
    'async' => false,
    'preview' => false,
    'simple' => false,
    'simplePaginate' => false,
    'editable' => false,
    'notfound' => false,
    'vertical' => false,
    'creatable' => false,
    'reindex' => false,
    'sortable' => false,
    'columnSelection' => false,
    'searchable' => false,
    'searchValue' => '',
    'name' => 'default',
    'sticky' => false,
    'thead' => null,
    'tbody' => null,
    'bodyBefore' => null,
    'bodyAfter' => null,
    'tfoot' => null,
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
    'fields',
    'bulkButtons',
    'asyncUrl',
    'async' => false,
    'preview' => false,
    'simple' => false,
    'simplePaginate' => false,
    'editable' => false,
    'notfound' => false,
    'vertical' => false,
    'creatable' => false,
    'reindex' => false,
    'sortable' => false,
    'columnSelection' => false,
    'searchable' => false,
    'searchValue' => '',
    'name' => 'default',
    'sticky' => false,
    'thead' => null,
    'tbody' => null,
    'bodyBefore' => null,
    'bodyAfter' => null,
    'tfoot' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div x-data="tableBuilder(
    <?php echo e((int) $creatable); ?>,
    <?php echo e((int) $sortable); ?>,
    <?php echo e((int) $reindex); ?>,
    <?php echo e((int) $async); ?>,
    '<?php echo e($asyncUrl); ?>'
)"
    data-pushstate="<?php echo e($attributes->get('data-pushstate', false)); ?>"
    <?php echo MoonShine\Support\AlpineJs::eventBlade('table-row-added', $name, 'add(true)'); ?>
    <?php echo MoonShine\Support\AlpineJs::eventBlade('table-reindex', $name, 'resolveReindex'); ?>
    <?php echo MoonShine\Support\AlpineJs::eventBladeWhen($async, 'table-updated', $name, 'asyncRequest'); ?>
    <?php echo e($attributes->only(['data-events'])); ?>

>
    <?php if($async && $searchable): ?>
        <div class="flex items-center gap-2">
            <form action="<?php echo e($asyncUrl); ?>"
                  @submit.prevent="asyncFormRequest"
            >
                <?php if (isset($component)) { $__componentOriginal14a9cb58f632607a286ccbee397ec70f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal14a9cb58f632607a286ccbee397ec70f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.input','data' => ['name' => 'search','type' => 'search','value' => ''.e($searchValue).'','placeholder' => ''.e(__('moonshine::ui.search')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'search','type' => 'search','value' => ''.e($searchValue).'','placeholder' => ''.e(__('moonshine::ui.search')).'']); ?>
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
            </form>
        </div>
    <?php endif; ?>

    <?php if($columnSelection): ?>
        <div class="flex justify-end">
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
                <div class="p-2">
                    <?php $__currentLoopData = $fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($field->isColumnSelection()): ?>
                            <div class="form-group form-group-inline">
                                <?php if (isset($component)) { $__componentOriginal907a9c03c99069df6c25a34488f7ce8f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal907a9c03c99069df6c25a34488f7ce8f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.switcher','data' => ['id' => 'column_selection' . $field->id(),'dataColumnSelectionChecker' => 'true','dataColumn' => ''.e($field->id()).'','@change' => 'columnSelection()']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form.switcher'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('column_selection' . $field->id()),'data-column-selection-checker' => 'true','data-column' => ''.e($field->id()).'','@change' => 'columnSelection()']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal907a9c03c99069df6c25a34488f7ce8f)): ?>
<?php $attributes = $__attributesOriginal907a9c03c99069df6c25a34488f7ce8f; ?>
<?php unset($__attributesOriginal907a9c03c99069df6c25a34488f7ce8f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal907a9c03c99069df6c25a34488f7ce8f)): ?>
<?php $component = $__componentOriginal907a9c03c99069df6c25a34488f7ce8f; ?>
<?php unset($__componentOriginal907a9c03c99069df6c25a34488f7ce8f); ?>
<?php endif; ?>

                                <?php if (isset($component)) { $__componentOriginalb1ab301d22b9d6823ac125a050b59817 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb1ab301d22b9d6823ac125a050b59817 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.label','data' => ['for' => 'column_selection' . $field->id()]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('column_selection' . $field->id())]); ?>
                                    <?php echo e($field->label()); ?>

                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb1ab301d22b9d6823ac125a050b59817)): ?>
<?php $attributes = $__attributesOriginalb1ab301d22b9d6823ac125a050b59817; ?>
<?php unset($__attributesOriginalb1ab301d22b9d6823ac125a050b59817); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb1ab301d22b9d6823ac125a050b59817)): ?>
<?php $component = $__componentOriginalb1ab301d22b9d6823ac125a050b59817; ?>
<?php unset($__componentOriginalb1ab301d22b9d6823ac125a050b59817); ?>
<?php endif; ?>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                 <?php $__env->slot('toggler', null, []); ?> 
                    <?php if (isset($component)) { $__componentOriginal02cd8db43c93f795a84d3988e7d5cfee = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal02cd8db43c93f795a84d3988e7d5cfee = $attributes; } ?>
<?php $component = MoonShine\Components\Icon::resolve(['icon' => 'heroicons.outline.table-cells'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
        </div>
    <?php endif; ?>

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
        <?php if (isset($component)) { $__componentOriginal1f92ca05a1de5ca8db89fe2ff7983871 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f92ca05a1de5ca8db89fe2ff7983871 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.table.index','data' => ['simple' => $simple,'sticky' => $sticky,'notfound' => $notfound,'attributes' => $attributes,'creatable' => $creatable,'dataName' => ''.e($name).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['simple' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($simple),'sticky' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sticky),'notfound' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($notfound),'attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes),'creatable' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($creatable),'data-name' => ''.e($name).'']); ?>
            <?php if(!$vertical): ?>
                 <?php $__env->slot('thead', null, []); ?> 
                    <?php if($thead ?? false): ?>
                        <?php echo $thead; ?>

                    <?php else: ?>
                        <?php if (isset($component)) { $__componentOriginal2a87f7bde776cd517e52b84ed85135c7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2a87f7bde776cd517e52b84ed85135c7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.table.head','data' => ['rows' => $rows,'fields' => $fields,'actions' => $bulkButtons,'asyncUrl' => $asyncUrl,'preview' => $preview]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::table.head'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['rows' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($rows),'fields' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($fields),'actions' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($bulkButtons),'asyncUrl' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($asyncUrl),'preview' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($preview)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2a87f7bde776cd517e52b84ed85135c7)): ?>
<?php $attributes = $__attributesOriginal2a87f7bde776cd517e52b84ed85135c7; ?>
<?php unset($__attributesOriginal2a87f7bde776cd517e52b84ed85135c7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2a87f7bde776cd517e52b84ed85135c7)): ?>
<?php $component = $__componentOriginal2a87f7bde776cd517e52b84ed85135c7; ?>
<?php unset($__componentOriginal2a87f7bde776cd517e52b84ed85135c7); ?>
<?php endif; ?>
                    <?php endif; ?>
                 <?php $__env->endSlot(); ?>
            <?php endif; ?>

            <?php if($rows->isNotEmpty()): ?>
                 <?php $__env->slot('tbody', null, []); ?> 
                    <?php echo $bodyBefore ?? ''; ?>

                    <?php if($tbody ?? false): ?>
                        <?php echo $tbody; ?>

                    <?php else: ?>
                    <?php if (isset($component)) { $__componentOriginal2729fd6d63a4bc664a33137a5a82e9a1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2729fd6d63a4bc664a33137a5a82e9a1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.table.body','data' => ['rows' => $rows,'vertical' => $vertical,'preview' => $preview,'editable' => $editable,'simple' => $simple,'sticky' => $sticky,'hasActions' => $bulkButtons->isNotEmpty(),'hasClickAction' => $attributes->get('data-click-action') !== null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::table.body'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['rows' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($rows),'vertical' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($vertical),'preview' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($preview),'editable' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($editable),'simple' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($simple),'sticky' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sticky),'hasActions' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($bulkButtons->isNotEmpty()),'has-click-action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes->get('data-click-action') !== null)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2729fd6d63a4bc664a33137a5a82e9a1)): ?>
<?php $attributes = $__attributesOriginal2729fd6d63a4bc664a33137a5a82e9a1; ?>
<?php unset($__attributesOriginal2729fd6d63a4bc664a33137a5a82e9a1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2729fd6d63a4bc664a33137a5a82e9a1)): ?>
<?php $component = $__componentOriginal2729fd6d63a4bc664a33137a5a82e9a1; ?>
<?php unset($__componentOriginal2729fd6d63a4bc664a33137a5a82e9a1); ?>
<?php endif; ?>
                    <?php endif; ?>
                    <?php echo $bodyAfter ?? ''; ?>

                 <?php $__env->endSlot(); ?>
            <?php endif; ?>

            <?php if(!$preview): ?>
                 <?php $__env->slot('tfoot', null, [':class' => 'actionsOpen ? \'translate-y-none ease-out\' : \'-translate-y-full ease-in hidden\'']); ?> 
                    <?php if($tfoot ?? false): ?>
                        <?php echo $tfoot; ?>

                    <?php else: ?>
                    <?php if (isset($component)) { $__componentOriginal4c9b6ff9f514c8e7a2fb11ddb856b5bb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4c9b6ff9f514c8e7a2fb11ddb856b5bb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.table.foot','data' => ['rows' => $rows,'actions' => $bulkButtons]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::table.foot'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['rows' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($rows),'actions' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($bulkButtons)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4c9b6ff9f514c8e7a2fb11ddb856b5bb)): ?>
<?php $attributes = $__attributesOriginal4c9b6ff9f514c8e7a2fb11ddb856b5bb; ?>
<?php unset($__attributesOriginal4c9b6ff9f514c8e7a2fb11ddb856b5bb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4c9b6ff9f514c8e7a2fb11ddb856b5bb)): ?>
<?php $component = $__componentOriginal4c9b6ff9f514c8e7a2fb11ddb856b5bb; ?>
<?php unset($__componentOriginal4c9b6ff9f514c8e7a2fb11ddb856b5bb); ?>
<?php endif; ?>
                    <?php endif; ?>
                 <?php $__env->endSlot(); ?>
            <?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f92ca05a1de5ca8db89fe2ff7983871)): ?>
<?php $attributes = $__attributesOriginal1f92ca05a1de5ca8db89fe2ff7983871; ?>
<?php unset($__attributesOriginal1f92ca05a1de5ca8db89fe2ff7983871); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f92ca05a1de5ca8db89fe2ff7983871)): ?>
<?php $component = $__componentOriginal1f92ca05a1de5ca8db89fe2ff7983871; ?>
<?php unset($__componentOriginal1f92ca05a1de5ca8db89fe2ff7983871); ?>
<?php endif; ?>

        <?php if($creatable): ?>
            <?php if (isset($component)) { $__componentOriginal5b3523037f393515dbb12b0b2c7450ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5b3523037f393515dbb12b0b2c7450ff = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.divider','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::divider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5b3523037f393515dbb12b0b2c7450ff)): ?>
<?php $attributes = $__attributesOriginal5b3523037f393515dbb12b0b2c7450ff; ?>
<?php unset($__attributesOriginal5b3523037f393515dbb12b0b2c7450ff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5b3523037f393515dbb12b0b2c7450ff)): ?>
<?php $component = $__componentOriginal5b3523037f393515dbb12b0b2c7450ff; ?>
<?php unset($__componentOriginal5b3523037f393515dbb12b0b2c7450ff); ?>
<?php endif; ?>

            <?php echo $createButton; ?>

        <?php endif; ?>

        <?php if(!$preview && $hasPaginator): ?>
            <?php echo e($paginator->links(
                $simplePaginate
                    ? 'moonshine::ui.simple-pagination'
                    : 'moonshine::ui.pagination',
                ['async' => $async]
            )); ?>

        <?php endif; ?>
    </div>
</div>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/components/table/builder.blade.php ENDPATH**/ ?>