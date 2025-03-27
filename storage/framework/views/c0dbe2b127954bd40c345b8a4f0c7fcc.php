<input <?php echo e($attributes->merge([
    'class' => !in_array($attributes->get('type'), ['checkbox', 'radio', 'color'])
        ? 'form-input'
        : 'form-' . $attributes->get('type', 'input'),
    'type' => 'text'])); ?>

/>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/components/form/input.blade.php ENDPATH**/ ?>