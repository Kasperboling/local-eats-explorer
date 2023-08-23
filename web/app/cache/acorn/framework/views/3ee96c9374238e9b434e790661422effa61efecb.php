
<a class="sr-only-focusable" href="#main-content">
  <?php echo e(__('Skip to content', 'gds')); ?>

</a>

<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container">
  <main class="is-root-container" id="main-content" tabindex="-1">
    <?php echo $__env->yieldContent('content'); ?>
  </main>

  <?php if (! empty(trim($__env->yieldContent('sidebar')))): ?>
    <aside class="sidebar">
      <?php echo $__env->yieldContent('sidebar'); ?>
    </aside>
  <?php endif; ?>
</div>

<?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /var/www/html/web/app/themes/gds/resources/views/layouts/app.blade.php ENDPATH**/ ?>