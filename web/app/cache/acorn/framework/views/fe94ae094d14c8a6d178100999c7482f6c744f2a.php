<div class="teaser teaser--<?php echo e(get_post_type()); ?> <?php echo e($className ?? ''); ?>">
  <figure class="teaser__media">
    <?php if(has_post_thumbnail()): ?>
      <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'medium', false, []); ?>

    <?php else: ?>
      <img src="<?php echo e(Roots\asset('images/default-teaser.webp')); ?>" alt="" />
    <?php endif; ?>
  </figure>
  <div class="teaser__content">
    <h3 class="teaser__title">
      <?php echo esc_html(get_the_title()); ?>

    </h3>

    
                <?php echo render_block([
                    'blockName' => 'core/post-date',
                    'attrs' => array_merge(
                        ['name' => 'core/post-date'],
                        [
      'format' => 'd.m.Y',
      'className' => 'teaser__date'
    ]
                    ),
                ]); ?>
            

    <?php if($excerpt = get_the_excerpt()): ?>
      <p class="teaser__description"><?php echo $excerpt; ?></p>
    <?php endif; ?>

    <?php if($categories = get_the_terms(get_post(), 'category')): ?>
      <div class="teaser__tags">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $term): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <a class="teaser__tag" href="<?php echo e(get_term_link($term)); ?>">
            <?php echo esc_html($term->name); ?>

          </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    <?php endif; ?>

    <p>
      <a class="teaser__readmore teaser__link" href="<?php echo e(get_permalink()); ?>">
        <span><?php echo e(__('Read article', 'gds')); ?></span>
        <i class="fa-solid fa-chevrons-right fa-2xs"></i>
      </a>
    </p>
  </div>
</div>
<?php /**PATH /var/www/html/web/app/themes/gds/resources/views/teasers/teaser.blade.php ENDPATH**/ ?>