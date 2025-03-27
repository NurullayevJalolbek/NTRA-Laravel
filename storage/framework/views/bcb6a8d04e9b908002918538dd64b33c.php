<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'buttons',
    'name' => null,
    'errors' => false,
    'precognitive' => false,
    'raw' => false,
    'errorsAbove' => true,
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
    'buttons',
    'name' => null,
    'errors' => false,
    'precognitive' => false,
    'raw' => false,
    'errorsAbove' => true,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php if($errorsAbove && formErrors($errors, $name)->isNotEmpty()): ?>
    <?php if (isset($component)) { $__componentOriginalbb716f453a3ac2293ac2e14bd98aef2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbb716f453a3ac2293ac2e14bd98aef2c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.all-errors','data' => ['errors' => formErrors($errors, $name)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form.all-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['errors' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(formErrors($errors, $name))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbb716f453a3ac2293ac2e14bd98aef2c)): ?>
<?php $attributes = $__attributesOriginalbb716f453a3ac2293ac2e14bd98aef2c; ?>
<?php unset($__attributesOriginalbb716f453a3ac2293ac2e14bd98aef2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbb716f453a3ac2293ac2e14bd98aef2c)): ?>
<?php $component = $__componentOriginalbb716f453a3ac2293ac2e14bd98aef2c; ?>
<?php unset($__componentOriginalbb716f453a3ac2293ac2e14bd98aef2c); ?>
<?php endif; ?>
<?php endif; ?>

<form
    <?php echo e($attributes->merge(['class' => 'form', 'method' => 'POST'])); ?>

    <?php if(empty($attributes->get('id'))): ?>
        x-id="['form']" :id="$id('form')"
    <?php endif; ?>
>
    <?php if(strtolower($attributes->get('method', '')) !== 'get'): ?>
        <?php echo csrf_field(); ?>
    <?php endif; ?>

    <?php echo e($slot); ?>


    <?php if(!$raw): ?>
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
            <?php if (isset($component)) { $__componentOriginalcb6bf9de1e25ea4a4d0411ec83a8d78e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcb6bf9de1e25ea4a4d0411ec83a8d78e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.column','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <div class="mt-3 flex w-full flex-wrap justify-start gap-2">
                    <?php echo e($buttons ?? ''); ?>

                </div>
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

            <?php if($precognitive): ?>
                <?php if (isset($component)) { $__componentOriginalcb6bf9de1e25ea4a4d0411ec83a8d78e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcb6bf9de1e25ea4a4d0411ec83a8d78e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.column','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <div class="precognition_errors mb-6"></div>
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
            <?php endif; ?>
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
    <?php endif; ?>
</form>
<?php /**PATH /var/www/vendor/moonshine/moonshine/src/Providers/../../resources/views/components/form/index.blade.php ENDPATH**/ ?>