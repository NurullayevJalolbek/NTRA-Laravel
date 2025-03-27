<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'simple' => false,
    'async' => false,
    'paginator',
    'elements' => []
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
    'simple' => false,
    'async' => false,
    'paginator',
    'elements' => []
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php if($simple): ?>
    <ul class="pagination-list simple">
        
        <li>
            <?php if($paginator->onFirstPage()): ?>
                <span class="pagination-simple disabled">
                    <?php echo __('moonshine::pagination.previous'); ?>

                </span>
            <?php else: ?>
                <a href="<?php echo e($paginator->previousPageUrl()); ?>"
                   <?php if($async): ?> @click.prevent="asyncRequest" <?php endif; ?>
                   class="pagination-simple"
                >
                    <?php echo __('moonshine::pagination.previous'); ?>

                </a>
            <?php endif; ?>
        </li>

        
        <li>
            <?php if($paginator->hasMorePages()): ?>
                <a href="<?php echo e($paginator->nextPageUrl()); ?>"
                   <?php if($async): ?> @click.prevent="asyncRequest" <?php endif; ?>
                   class="pagination-simple"
                >
                    <?php echo __('moonshine::pagination.next'); ?>

                </a>
            <?php else: ?>
                <span class="pagination-simple disabled">
                    <?php echo __('moonshine::pagination.next'); ?>

                </span>
            <?php endif; ?>
        </li>
    </ul>
<?php elseif($paginator->hasPages()): ?>
    <!-- Pagination -->
    <div class="pagination">
        <ul class="pagination-list">
            <?php if(!$paginator->onFirstPage()): ?>
                <li class="pagination-item">
                    <a href="<?php echo e($paginator->previousPageUrl()); ?>"
                       <?php if($async): ?> @click.prevent="asyncRequest" <?php endif; ?>
                       class="pagination-first"
                       title="<?php echo __('moonshine::pagination.previous'); ?>"
                    >
                        <?php if (isset($component)) { $__componentOriginal02cd8db43c93f795a84d3988e7d5cfee = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal02cd8db43c93f795a84d3988e7d5cfee = $attributes; } ?>
<?php $component = MoonShine\Components\Icon::resolve(['icon' => 'heroicons.chevron-double-left','size' => '6'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                    </a>
                </li>
            <?php endif; ?>

            <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <?php if(is_string($element)): ?>
                    <li class="pagination-item">
                        <span class="pagination-dots"><?php echo e($element); ?></span>
                    </li>
                <?php endif; ?>

                
                <?php if(is_array($element)): ?>
                    <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="pagination-item">
                            <a href="<?php echo e($url); ?>"
                               <?php if($async): ?> @click.prevent="asyncRequest" <?php endif; ?>
                               class="pagination-page
                               <?php if($page == $paginator->currentPage()): ?> _is-active <?php endif; ?>"
                            >
                                <?php echo e($page); ?>

                            </a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php if($paginator->hasMorePages()): ?>
                <li class="pagination-item">
                    <a href="<?php echo e($paginator->nextPageUrl()); ?>"
                       <?php if($async): ?> @click.prevent="asyncRequest" <?php endif; ?>
                       class="pagination-last"
                       title="<?php echo __('moonshine::pagination.next'); ?>"
                    >
                        <?php if (isset($component)) { $__componentOriginal02cd8db43c93f795a84d3988e7d5cfee = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal02cd8db43c93f795a84d3988e7d5cfee = $attributes; } ?>
<?php $component = MoonShine\Components\Icon::resolve(['icon' => 'heroicons.chevron-double-right','size' => '6'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                    </a>
                </li>
            <?php endif; ?>
        </ul>
        <div class="pagination-results">
            <?php echo __('moonshine::pagination.showing'); ?>

            <?php if($paginator->firstItem()): ?>
                <?php echo e($paginator->firstItem()); ?>

                <?php echo __('moonshine::pagination.to'); ?>

                <?php echo e($paginator->lastItem()); ?>

            <?php else: ?>
                <?php echo e($paginator->count()); ?>

            <?php endif; ?>
            <?php echo __('moonshine::pagination.of'); ?>

            <?php echo e($paginator->total()); ?>

            <?php echo __('moonshine::pagination.results'); ?>

        </div>
    </div>
    <!-- END: Pagination -->
<?php endif; ?>

<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/components/pagination.blade.php ENDPATH**/ ?>