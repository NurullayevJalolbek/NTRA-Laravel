<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'name' => '',
    'id' => '',
    'label' => '',
    'beforeLabel' => false,
    'inLabel' => false,
    'beforeSlot',
    'afterSlot',
    'formName' => ''
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
    'name' => '',
    'id' => '',
    'label' => '',
    'beforeLabel' => false,
    'inLabel' => false,
    'beforeSlot',
    'afterSlot',
    'formName' => ''
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<div <?php echo e($attributes->merge(['class' => 'form-group moonshine-field'])
    ->only(['class', 'x-show'])); ?>

     x-id="['input-wrapper']" :id="$id('input-wrapper')"
>
    <?php echo e($beforeLabel && !$inLabel ? $slot : ''); ?>


    <?php if($label): ?>
        <?php if (isset($component)) { $__componentOriginalb1ab301d22b9d6823ac125a050b59817 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb1ab301d22b9d6823ac125a050b59817 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.label','data' => ['for' => ''.e($attributes->get('id', $id)).'','attributes' => $attributes->only('required')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => ''.e($attributes->get('id', $id)).'','attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes->only('required'))]); ?>
            <?php echo e($beforeLabel && $inLabel ? $slot : ''); ?>

            <?php echo $label; ?>

            <?php echo e(!$beforeLabel && $inLabel ? $slot : ''); ?>

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
    <?php endif; ?>

    <div>
        <?php echo e($beforeSlot ?? ''); ?>


        <?php echo e(!$beforeLabel && !$inLabel ? $slot : ''); ?>


        <?php echo e($afterSlot ?? ''); ?>

    </div>

    <?php $__errorArgs = [$name, $formName];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <?php if (isset($component)) { $__componentOriginal8c392c2543387e7715c9099e7b7baca4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8c392c2543387e7715c9099e7b7baca4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.input-error','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form.input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <?php echo e($message); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8c392c2543387e7715c9099e7b7baca4)): ?>
<?php $attributes = $__attributesOriginal8c392c2543387e7715c9099e7b7baca4; ?>
<?php unset($__attributesOriginal8c392c2543387e7715c9099e7b7baca4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8c392c2543387e7715c9099e7b7baca4)): ?>
<?php $component = $__componentOriginal8c392c2543387e7715c9099e7b7baca4; ?>
<?php unset($__componentOriginal8c392c2543387e7715c9099e7b7baca4); ?>
<?php endif; ?>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/components/form/input-wrapper.blade.php ENDPATH**/ ?>