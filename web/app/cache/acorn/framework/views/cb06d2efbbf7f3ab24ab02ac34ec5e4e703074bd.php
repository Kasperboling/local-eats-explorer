<?php (render_block(['blockName' => 'core/media-text'])); ?>

<div class="wp-block-media-text alignwide is-stacked-on-mobile has-media-on-the-right is-vertically-aligned-top" style="grid-template-columns: 68% 1fr;">
  <figure class="wp-block-media-text__media">
    <img decoding="async" src="<?php echo e(asset('images/404.webp')->uri()); ?>" alt="">
  </figure>
  <div class="wp-block-media-text__content">
    <?php if(!empty(trim($header))): ?>
      <?php echo $header; ?>

    <?php else: ?>
      <h1 class="has-xl-heading-font-size"><?php echo $title ?? __('Sorry...', 'gds'); ?></h1>
    <?php endif; ?>

    <?php if(!empty(trim($slot))): ?>
      <?php echo $slot; ?>

    <?php endif; ?>

    <p class="has-l-body-font-size"><?php echo $description ?? __('We could not find what you were looking for.', 'gds'); ?></p>

    <?php if(!empty(trim($search))): ?>
      <?php echo $search; ?>

    <?php else: ?>
      
                <?php echo render_block([
                    'blockName' => 'core/search',
                    'attrs' => array_merge(
                        ['name' => 'core/search'],
                        [
        'label' => $searchLabel ?? __('Wanna try searching for it?', 'gds'),
        'buttonUseIcon' => true
      ]
                    ),
                ]); ?>
            
    <?php endif; ?>
  </div>
</div>
<?php /**PATH /var/www/html/web/app/themes/gds/resources/views/components/not-found.blade.php ENDPATH**/ ?>