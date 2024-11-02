<?php if (isset($component)) { $__componentOriginala83b3859802539a406efce525ddd52da = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala83b3859802539a406efce525ddd52da = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.index','data' => ['attributes' => $attributes,'name' => $name,'precognitive' => $precognitive,'errorsAbove' => $errorsAbove]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($name),'precognitive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($precognitive),'errorsAbove' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errorsAbove)]); ?>
    <?php if (isset($component)) { $__componentOriginalbe9b282893bab4ef9e234898f6c1bda7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbe9b282893bab4ef9e234898f6c1bda7 = $attributes; } ?>
<?php $component = MoonShine\Components\FieldsGroup::resolve(['components' => $fields] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::fields-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\Components\FieldsGroup::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbe9b282893bab4ef9e234898f6c1bda7)): ?>
<?php $attributes = $__attributesOriginalbe9b282893bab4ef9e234898f6c1bda7; ?>
<?php unset($__attributesOriginalbe9b282893bab4ef9e234898f6c1bda7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbe9b282893bab4ef9e234898f6c1bda7)): ?>
<?php $component = $__componentOriginalbe9b282893bab4ef9e234898f6c1bda7; ?>
<?php unset($__componentOriginalbe9b282893bab4ef9e234898f6c1bda7); ?>
<?php endif; ?>

     <?php $__env->slot('buttons', null, []); ?> 
        <?php if(!($hideSubmit ?? false)): ?>
        <?php if (isset($component)) { $__componentOriginaldafd5965086f19145b581eeb5ef12cdb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldafd5965086f19145b581eeb5ef12cdb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.button','data' => ['attributes' => $submitAttributes->merge([
                'class' => 'form_submit_button',
                'type' => 'submit'
            ])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($submitAttributes->merge([
                'class' => 'form_submit_button',
                'type' => 'submit'
            ]))]); ?>
            <?php if (isset($component)) { $__componentOriginal40ae0cfa4dbda2b5bb37ea2480e2c9a1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal40ae0cfa4dbda2b5bb37ea2480e2c9a1 = $attributes; } ?>
<?php $component = MoonShine\Components\Spinner::resolve(['color' => 'secondary'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::spinner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\Components\Spinner::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'form_submit_button_loader','style' => 'display: none;']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal40ae0cfa4dbda2b5bb37ea2480e2c9a1)): ?>
<?php $attributes = $__attributesOriginal40ae0cfa4dbda2b5bb37ea2480e2c9a1; ?>
<?php unset($__attributesOriginal40ae0cfa4dbda2b5bb37ea2480e2c9a1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal40ae0cfa4dbda2b5bb37ea2480e2c9a1)): ?>
<?php $component = $__componentOriginal40ae0cfa4dbda2b5bb37ea2480e2c9a1; ?>
<?php unset($__componentOriginal40ae0cfa4dbda2b5bb37ea2480e2c9a1); ?>
<?php endif; ?>

            <?php echo e($submitLabel); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldafd5965086f19145b581eeb5ef12cdb)): ?>
<?php $attributes = $__attributesOriginaldafd5965086f19145b581eeb5ef12cdb; ?>
<?php unset($__attributesOriginaldafd5965086f19145b581eeb5ef12cdb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldafd5965086f19145b581eeb5ef12cdb)): ?>
<?php $component = $__componentOriginaldafd5965086f19145b581eeb5ef12cdb; ?>
<?php unset($__componentOriginaldafd5965086f19145b581eeb5ef12cdb); ?>
<?php endif; ?>
        <?php endif; ?>

        <?php if($buttons->isNotEmpty()): ?>
            <?php if (isset($component)) { $__componentOriginal89b444d4d0106ea470feb5795ea8a5e0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89b444d4d0106ea470feb5795ea8a5e0 = $attributes; } ?>
<?php $component = MoonShine\Components\ActionGroup::resolve(['actions' => $buttons] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala83b3859802539a406efce525ddd52da)): ?>
<?php $attributes = $__attributesOriginala83b3859802539a406efce525ddd52da; ?>
<?php unset($__attributesOriginala83b3859802539a406efce525ddd52da); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala83b3859802539a406efce525ddd52da)): ?>
<?php $component = $__componentOriginala83b3859802539a406efce525ddd52da; ?>
<?php unset($__componentOriginala83b3859802539a406efce525ddd52da); ?>
<?php endif; ?>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/components/form/builder.blade.php ENDPATH**/ ?>