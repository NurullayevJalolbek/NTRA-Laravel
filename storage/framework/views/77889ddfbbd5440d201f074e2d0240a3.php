<div <?php echo e($attributes); ?>>
    <?php echo $__env->renderWhen($element->label(), 'moonshine::layouts.shared.title', [
        'title' => $element->label()
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>

    <?php echo $element->text(); ?>

</div>

<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/decorations/text.blade.php ENDPATH**/ ?>