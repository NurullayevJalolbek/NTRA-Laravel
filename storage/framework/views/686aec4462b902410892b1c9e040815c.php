<label <?php echo e($attributes->merge(['class' => 'form-label'])->except('required')); ?>>
    <?php echo e($slot ?? ''); ?>


    <?php if($attributes->get('required', false)): ?>
        <span class="required">*</span>
    <?php endif; ?>
</label>
<?php /**PATH /var/www/vendor/moonshine/moonshine/src/Providers/../../resources/views/components/form/label.blade.php ENDPATH**/ ?>