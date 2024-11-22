<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'badge' => false,
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
    'badge' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php if($action->isInOffCanvas()): ?>
    <?php if (isset($component)) { $__componentOriginald1e15e03e92afddb0ef018107c8e6aab = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald1e15e03e92afddb0ef018107c8e6aab = $attributes; } ?>
<?php $component = MoonShine\Components\Offcanvas::resolve(['title' => ''.e($action->offCanvas()->title($action->getItem())).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::offcanvas'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\Components\Offcanvas::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['left' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($action->offCanvas()->isLeft()),'eventName' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($action->offCanvas()->getName())]); ?>
         <?php $__env->slot('toggler', null, ['class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes->get('class'))]); ?> 
            <?php if (isset($component)) { $__componentOriginal02cd8db43c93f795a84d3988e7d5cfee = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal02cd8db43c93f795a84d3988e7d5cfee = $attributes; } ?>
<?php $component = MoonShine\Components\Icon::resolve(['icon' => $action->iconValue(),'size' => '6'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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

            <?php echo e($action->label()); ?>


            <?php if($badge !== false): ?>
                <?php if (isset($component)) { $__componentOriginal0f84a35ac5116b2d6f172ab2d1c16403 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0f84a35ac5116b2d6f172ab2d1c16403 = $attributes; } ?>
<?php $component = MoonShine\Components\Badge::resolve(['color' => ''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\Components\Badge::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo e($badge); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0f84a35ac5116b2d6f172ab2d1c16403)): ?>
<?php $attributes = $__attributesOriginal0f84a35ac5116b2d6f172ab2d1c16403; ?>
<?php unset($__attributesOriginal0f84a35ac5116b2d6f172ab2d1c16403); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0f84a35ac5116b2d6f172ab2d1c16403)): ?>
<?php $component = $__componentOriginal0f84a35ac5116b2d6f172ab2d1c16403; ?>
<?php unset($__componentOriginal0f84a35ac5116b2d6f172ab2d1c16403); ?>
<?php endif; ?>
            <?php endif; ?>
         <?php $__env->endSlot(); ?>

        <?php echo $action->offCanvas()->content($action->getItem()); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald1e15e03e92afddb0ef018107c8e6aab)): ?>
<?php $attributes = $__attributesOriginald1e15e03e92afddb0ef018107c8e6aab; ?>
<?php unset($__attributesOriginald1e15e03e92afddb0ef018107c8e6aab); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald1e15e03e92afddb0ef018107c8e6aab)): ?>
<?php $component = $__componentOriginald1e15e03e92afddb0ef018107c8e6aab; ?>
<?php unset($__componentOriginald1e15e03e92afddb0ef018107c8e6aab); ?>
<?php endif; ?>
<?php elseif($action->isInModal()): ?>
    <?php if (isset($component)) { $__componentOriginal803a988526e44cad9a1fffef0de87d17 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal803a988526e44cad9a1fffef0de87d17 = $attributes; } ?>
<?php $component = MoonShine\Components\Modal::resolve(['asyncUrl' => $action->modal()->isAsync() ? $action->url() : '','title' => ''.e($action->modal()->title($action->getItem())).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\Components\Modal::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['eventName' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($action->modal()->getName()),'async' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($action->modal()->isAsync()),'auto' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($action->modal()->isAuto()),'autoClose' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($action->modal()->isAutoClose()),'wide' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($action->modal()->isWide()),'attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($action->modal()->attributes()),'closeOutside' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($action->modal()->isCloseOutside())]); ?>
        <div class="mb-4">
            <?php echo $action->modal()->content($action->getItem()); ?>

        </div>

        <?php if($action->modal()->getButtons()->isNotEmpty()): ?>
            <?php if (isset($component)) { $__componentOriginal89b444d4d0106ea470feb5795ea8a5e0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b444d4d0106ea470feb5795ea8a5e0 = $attributes; } ?>
<?php $component = MoonShine\Components\ActionGroup::resolve(['actions' => $action->modal()->getButtons($action->getItem())] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::action-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\Components\ActionGroup::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
        <?php endif; ?>

         <?php $__env->slot('outerHtml', null, []); ?> 
            <?php if (isset($component)) { $__componentOriginalec670fa434a76aa5cbcd93ca765df912 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalec670fa434a76aa5cbcd93ca765df912 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.link-button','data' => ['attributes' => $attributes->merge([
                    '@click.prevent' => 'toggleModal',
                ]),'icon' => $action->iconValue(),'badge' => $badge,'href' => $action->url()]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::link-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes->merge([
                    '@click.prevent' => 'toggleModal',
                ])),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($action->iconValue()),'badge' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($badge),'href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($action->url())]); ?>
                <?php echo e($action->label()); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalec670fa434a76aa5cbcd93ca765df912)): ?>
<?php $attributes = $__attributesOriginalec670fa434a76aa5cbcd93ca765df912; ?>
<?php unset($__attributesOriginalec670fa434a76aa5cbcd93ca765df912); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalec670fa434a76aa5cbcd93ca765df912)): ?>
<?php $component = $__componentOriginalec670fa434a76aa5cbcd93ca765df912; ?>
<?php unset($__componentOriginalec670fa434a76aa5cbcd93ca765df912); ?>
<?php endif; ?>
         <?php $__env->endSlot(); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal803a988526e44cad9a1fffef0de87d17)): ?>
<?php $attributes = $__attributesOriginal803a988526e44cad9a1fffef0de87d17; ?>
<?php unset($__attributesOriginal803a988526e44cad9a1fffef0de87d17); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal803a988526e44cad9a1fffef0de87d17)): ?>
<?php $component = $__componentOriginal803a988526e44cad9a1fffef0de87d17; ?>
<?php unset($__componentOriginal803a988526e44cad9a1fffef0de87d17); ?>
<?php endif; ?>
<?php else: ?>
    <?php if (isset($component)) { $__componentOriginalec670fa434a76aa5cbcd93ca765df912 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalec670fa434a76aa5cbcd93ca765df912 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.link-button','data' => ['attributes' => $attributes,'href' => $action->url(),'icon' => $action->iconValue(),'badge' => $badge]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::link-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes),'href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($action->url()),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($action->iconValue()),'badge' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($badge)]); ?>
        <?php echo e($action->label()); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalec670fa434a76aa5cbcd93ca765df912)): ?>
<?php $attributes = $__attributesOriginalec670fa434a76aa5cbcd93ca765df912; ?>
<?php unset($__attributesOriginalec670fa434a76aa5cbcd93ca765df912); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalec670fa434a76aa5cbcd93ca765df912)): ?>
<?php $component = $__componentOriginalec670fa434a76aa5cbcd93ca765df912; ?>
<?php unset($__componentOriginalec670fa434a76aa5cbcd93ca765df912); ?>
<?php endif; ?>
<?php endif; ?>

<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/actions/default.blade.php ENDPATH**/ ?>