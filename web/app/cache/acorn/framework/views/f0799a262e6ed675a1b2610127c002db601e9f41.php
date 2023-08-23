<div <?php echo get_block_wrapper_attributes(['class' => 'grid']); ?>>
  <?php while($query->have_posts()): ?> <?php ($query->the_post()); ?>
    <div class="cell <?php echo e($align === '' ? 'small:6' : 'small:6 large:4'); ?>">
      <?php echo $__env->first(['teasers.' . get_post_type(), 'teasers.teaser'], [
        'post' => get_post(),
        'className' => 'is-card'
      ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
  <?php endwhile; ?>
  <?php (wp_reset_postdata()); ?>

  <?php if($use_pagination ?? false): ?>
    <?php echo $__env->make('partials.pagination', ['query' => $query], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endif; ?>
</div>
<?php /**PATH /var/www/html/web/app/themes/gds/resources/blocks/article-grid/article-grid.blade.php ENDPATH**/ ?>