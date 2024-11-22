<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'components' => [],
    'actions' => $_actions ?? [],
    'home_route' => null,
    'hideLogo' => false,
    'hideSwitcher' => false,
    'logo',
    'profile',
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
    'components' => [],
    'actions' => $_actions ?? [],
    'home_route' => null,
    'hideLogo' => false,
    'hideSwitcher' => false,
    'logo',
    'profile',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<!-- Menu horizontal -->
<aside <?php echo e($attributes->merge(['class' => 'layout-menu-horizontal'])); ?>

       :class="asideMenuOpen && '_is-opened'"
       x-data="{minimizedMenu: false}"
>
    <?php if(!$hideLogo): ?>
        <div class="menu-logo">
            <?php if($logo ?? false): ?>
                <?php echo e($logo); ?>

            <?php else: ?>
                <?php echo $__env->make('moonshine::layouts.shared.logo', ['home_route' => $home_route], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <nav class="menu-navigation">
        <?php if (isset($component)) { $__componentOriginal011755f4cd8238a723199ac83befc65c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal011755f4cd8238a723199ac83befc65c = $attributes; } ?>
<?php $component = MoonShine\Components\Components::resolve(['components' => $components] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::components'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\Components\Components::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal011755f4cd8238a723199ac83befc65c)): ?>
<?php $attributes = $__attributesOriginal011755f4cd8238a723199ac83befc65c; ?>
<?php unset($__attributesOriginal011755f4cd8238a723199ac83befc65c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal011755f4cd8238a723199ac83befc65c)): ?>
<?php $component = $__componentOriginal011755f4cd8238a723199ac83befc65c; ?>
<?php unset($__componentOriginal011755f4cd8238a723199ac83befc65c); ?>
<?php endif; ?>

        <?php echo e($slot ?? ''); ?>

    </nav>

    <div class="menu-actions">
        <?php if (isset($component)) { $__componentOriginal011755f4cd8238a723199ac83befc65c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal011755f4cd8238a723199ac83befc65c = $attributes; } ?>
<?php $component = MoonShine\Components\Components::resolve(['components' => $actions] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::components'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\Components\Components::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal011755f4cd8238a723199ac83befc65c)): ?>
<?php $attributes = $__attributesOriginal011755f4cd8238a723199ac83befc65c; ?>
<?php unset($__attributesOriginal011755f4cd8238a723199ac83befc65c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal011755f4cd8238a723199ac83befc65c)): ?>
<?php $component = $__componentOriginal011755f4cd8238a723199ac83befc65c; ?>
<?php unset($__componentOriginal011755f4cd8238a723199ac83befc65c); ?>
<?php endif; ?>

        <?php echo e($profile ?? ''); ?>


        <?php if(!$hideSwitcher && config('moonshine.use_theme_switcher', true)): ?>
            <div class="menu-inner-divider"></div>

            <div class="menu-mode">
                <?php if (isset($component)) { $__componentOriginald44e98cb75abfc0fa8a79b390da99bbb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald44e98cb75abfc0fa8a79b390da99bbb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.layout.theme-switcher','data' => ['top' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::layout.theme-switcher'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['top' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald44e98cb75abfc0fa8a79b390da99bbb)): ?>
<?php $attributes = $__attributesOriginald44e98cb75abfc0fa8a79b390da99bbb; ?>
<?php unset($__attributesOriginald44e98cb75abfc0fa8a79b390da99bbb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald44e98cb75abfc0fa8a79b390da99bbb)): ?>
<?php $component = $__componentOriginald44e98cb75abfc0fa8a79b390da99bbb; ?>
<?php unset($__componentOriginald44e98cb75abfc0fa8a79b390da99bbb); ?>
<?php endif; ?>
            </div>
        <?php endif; ?>

        <div class="menu-burger">
            <?php echo $__env->make('moonshine::layouts.shared.burger', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</aside>
<!-- END: Menu horizontal -->
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/components/layout/top-bar.blade.php ENDPATH**/ ?>