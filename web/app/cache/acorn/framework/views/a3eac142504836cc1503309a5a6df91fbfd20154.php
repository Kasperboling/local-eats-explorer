<?php if(!str_contains(get_the_content(), '</h1>')): ?>
  <?php echo $__env->make('partials.page-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php (the_content()); ?>
<?php /**PATH /var/www/html/web/app/themes/gds/resources/views/content/page.blade.php ENDPATH**/ ?>