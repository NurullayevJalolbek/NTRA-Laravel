<div x-id="['belongs-to-many']"
     :id="$id('belongs-to-many')"
     data-field-block="<?php echo e($element->name()); ?>"
>
    <?php if($element->isCreatable()): ?>
        <?php echo $element->createButton(); ?>


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

        <?php $__env->startFragment($element->getRelationName()); ?>
            <div x-data="fragment('<?php echo e($element->fragmentUrl()); ?>')"
                 <?php echo MoonShine\Support\AlpineJs::eventBlade('fragment-updated', $element->getRelationName(), 'fragmentUpdate'); ?>
            >
        <?php endif; ?>
            <?php if($element->isSelectMode()): ?>
                <?php if (isset($component)) { $__componentOriginal73c6f62b756759d0cfcff0c734cdf46b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73c6f62b756759d0cfcff0c734cdf46b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.select','data' => ['attributes' => $element->attributes()->merge([
                    'id' => $element->id(),
                    'name' => $element->name(),
                    'multiple' => true
                ]),'nullable' => $element->isNullable(),'searchable' => true,'class' => \Illuminate\Support\Arr::toCssClasses(['form-invalid' => $errors->{$element->getFormName()}->has($element->name())]),'value' => $element->selectedKeys(),'values' => $element->values(),'customProperties' => $element->valuesWithProperties(onlyCustom: true),'asyncRoute' => $element->isAsyncSearch() ? $element->asyncSearchUrl() : null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->attributes()->merge([
                    'id' => $element->id(),
                    'name' => $element->name(),
                    'multiple' => true
                ])),'nullable' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->isNullable()),'searchable' => true,'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses(['form-invalid' => $errors->{$element->getFormName()}->has($element->name())])),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->selectedKeys()),'values' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->values()),'customProperties' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->valuesWithProperties(onlyCustom: true)),'asyncRoute' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->isAsyncSearch() ? $element->asyncSearchUrl() : null)]); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73c6f62b756759d0cfcff0c734cdf46b)): ?>
<?php $attributes = $__attributesOriginal73c6f62b756759d0cfcff0c734cdf46b; ?>
<?php unset($__attributesOriginal73c6f62b756759d0cfcff0c734cdf46b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73c6f62b756759d0cfcff0c734cdf46b)): ?>
<?php $component = $__componentOriginal73c6f62b756759d0cfcff0c734cdf46b; ?>
<?php unset($__componentOriginal73c6f62b756759d0cfcff0c734cdf46b); ?>
<?php endif; ?>
            <?php else: ?>
                <?php if($element->isAsyncSearch()): ?>
                    <div x-data="asyncSearch('<?php echo e($element->asyncSearchUrl()); ?>')">
                        <div class="dropdown">
                            <?php if (isset($component)) { $__componentOriginal14a9cb58f632607a286ccbee397ec70f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal14a9cb58f632607a286ccbee397ec70f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.input','data' => ['xModel' => 'query','@input.debounce' => 'search','placeholder' => trans('moonshine::ui.search')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-model' => 'query','@input.debounce' => 'search','placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('moonshine::ui.search'))]); ?>
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
                            <div class="dropdown-body pointer-events-auto visible opacity-100">
                                <div class="dropdown-content">
                                    <ul class="dropdown-menu">
                                        <template x-for="(item, key) in match">
                                            <li class="dropdown-item">
                                                <a href="#"
                                                   class="dropdown-menu-link flex gap-x-2 items-center"
                                                   @click.prevent="select(item)"
                                                >
                                                    <div x-show="item?.customProperties?.image"
                                                         class="zoom-in h-10 w-10 overflow-hidden rounded-md"
                                                    >
                                                        <img class="h-full w-full object-cover"
                                                              :src="item.customProperties.image"
                                                              alt=""
                                                        >
                                                    </div>
                                                    <span x-text="item.label" />
                                                </a>
                                            </li>
                                        </template>
                                    </ul>
                                </div>
                            </div>
                        </div>

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

                        <div x-data="pivot"
                             x-init="autoCheck"
                             class="pivotTable"
                             data-table-name="<?php echo e($element->getTableComponentName()); ?>"
                        >
                            <?php if (isset($component)) { $__componentOriginal89b444d4d0106ea470feb5795ea8a5e0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b444d4d0106ea470feb5795ea8a5e0 = $attributes; } ?>
<?php $component = MoonShine\Components\ActionGroup::resolve(['actions' => $element->getButtons()] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::action-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\Components\ActionGroup::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b444d4d0106ea470feb5795ea8a5e0)): ?>
<?php $attributes = $__attributesOriginal89b444d4d0106ea470feb5795ea8a5e0; ?>
<?php unset($__attributesOriginal89b444d4d0106ea470feb5795ea8a5e0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b444d4d0106ea470feb5795ea8a5e0)): ?>
<?php $component = $__componentOriginal89b444d4d0106ea470feb5795ea8a5e0; ?>
<?php unset($__componentOriginal89b444d4d0106ea470feb5795ea8a5e0); ?>
<?php endif; ?>

                            <?php echo e($table->render()); ?>

                        </div>
                    </div>
                <?php else: ?>
                    <div x-data="pivot" x-init="autoCheck">
                        <?php if (isset($component)) { $__componentOriginal89b444d4d0106ea470feb5795ea8a5e0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b444d4d0106ea470feb5795ea8a5e0 = $attributes; } ?>
<?php $component = MoonShine\Components\ActionGroup::resolve(['actions' => $element->getButtons()] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::action-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\Components\ActionGroup::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89b444d4d0106ea470feb5795ea8a5e0)): ?>
<?php $attributes = $__attributesOriginal89b444d4d0106ea470feb5795ea8a5e0; ?>
<?php unset($__attributesOriginal89b444d4d0106ea470feb5795ea8a5e0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89b444d4d0106ea470feb5795ea8a5e0)): ?>
<?php $component = $__componentOriginal89b444d4d0106ea470feb5795ea8a5e0; ?>
<?php unset($__componentOriginal89b444d4d0106ea470feb5795ea8a5e0); ?>
<?php endif; ?>

                        <?php echo e($table->render()); ?>

                    </div>
                <?php endif; ?>
            <?php endif; ?>
        <?php if($element->isCreatable()): ?>
            </div>
            <?php echo $__env->stopFragment(); ?>
        <?php endif; ?>
</div>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/fields/relationships/belongs-to-many.blade.php ENDPATH**/ ?>