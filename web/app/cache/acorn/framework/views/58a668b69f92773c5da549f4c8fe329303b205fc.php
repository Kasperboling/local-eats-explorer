
                <?php echo render_block([
                    'blockName' => 'gds/breadcrumb',
                    'attrs' => array_merge(
                        ['name' => 'gds/breadcrumb'],
                        
                    ),
                ]); ?>
            

                <?php echo render_block([
                    'blockName' => 'core/media-text',
                    'attrs' => array_merge(
                        ['name' => 'core/media-text'],
                        
                    ),
                ]); ?>
            

<article <?php (post_class('alignwide entry')); ?>>
  <?php echo $__env->make('partials.page-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <div class="entry__content entry-content">
    <?php (the_content()); ?>
  </div>

  <aside class="entry__sidebar">
    <?php if($related && $related->have_posts()): ?>
      <h2><?php echo e(__('Related articles', 'gds')); ?></h2>

      <div class="entry__related">
        <?php while($related->have_posts()): ?> <?php ($related->the_post()); ?>
          <?php echo $__env->first(['teasers.' . get_post_type(), 'teasers.teaser'], [
            'post' => get_post(),
          ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
  </aside>
</article>
<?php /**PATH /var/www/html/web/app/themes/gds/resources/views/content/single.blade.php ENDPATH**/ ?>