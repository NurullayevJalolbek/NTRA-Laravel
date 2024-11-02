<div x-id="['json']"
     :id="$id('json')"
     <?php echo e($element->attributes()->only('class')); ?>

     data-field-block="<?php echo e($element->name()); ?>"
>
    <?php echo e($table->render()); ?>

</div>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/fields/json.blade.php ENDPATH**/ ?>