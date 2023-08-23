<div <?php echo get_block_wrapper_attributes(); ?>>
  <?php if(!$is_preview): ?>
    <?php echo $content; ?>

  <?php else: ?>
    Breadcrumb placeholder...
  <?php endif; ?>
</div>
<?php /**PATH /var/www/html/web/app/themes/gds/resources/blocks/breadcrumb/breadcrumb.blade.php ENDPATH**/ ?>