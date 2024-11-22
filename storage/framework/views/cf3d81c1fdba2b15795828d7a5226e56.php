<div x-data="tree(<?php echo json_encode($element->treeKeys(), 15, 512) ?>)">
    <?php echo $element->toTreeHtml(); ?>

</div>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/fields/shared/tree.blade.php ENDPATH**/ ?>