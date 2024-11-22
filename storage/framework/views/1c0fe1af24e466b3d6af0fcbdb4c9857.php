<?php if($element->tabs()->isNotEmpty()): ?>
    <?php if (isset($component)) { $__componentOriginalfad74f2af1978e02cf11dc8aaedad4b8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfad74f2af1978e02cf11dc8aaedad4b8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.tabs','data' => ['id' => 'tabs_'.e($element->id()).'','attributes' => $attributes->class(['mb-4']),'active' => $element->getActive(),'isVertical' => $element->isVertical(),'tabs' => $element->tabsWithHtml()->toArray(),'contents' => $element->contentWithHtml()->toArray(),'justifyAlign' => $element->getJustifyAlign()]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::tabs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'tabs_'.e($element->id()).'','attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes->class(['mb-4'])),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->getActive()),'isVertical' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->isVertical()),'tabs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->tabsWithHtml()->toArray()),'contents' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->contentWithHtml()->toArray()),'justifyAlign' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element->getJustifyAlign())]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfad74f2af1978e02cf11dc8aaedad4b8)): ?>
<?php $attributes = $__attributesOriginalfad74f2af1978e02cf11dc8aaedad4b8; ?>
<?php unset($__attributesOriginalfad74f2af1978e02cf11dc8aaedad4b8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfad74f2af1978e02cf11dc8aaedad4b8)): ?>
<?php $component = $__componentOriginalfad74f2af1978e02cf11dc8aaedad4b8; ?>
<?php unset($__componentOriginalfad74f2af1978e02cf11dc8aaedad4b8); ?>
<?php endif; ?>
<?php endif; ?>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/decorations/tabs.blade.php ENDPATH**/ ?>