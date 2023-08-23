
<div <?php echo get_block_wrapper_attributes(); ?>>
  <share-button title="<?php echo e($title); ?>" url="<?php echo e($url); ?>">
    <toggle-button
      class="wp-block-gds-share__button"
      aria-controls="<?php echo e($share_id); ?>"
      slot="button"
    >
      <span class="wp-block-gds-share__button-label">
        <?php echo e(__('Share', 'gds')); ?>

      </span>
      <i class="fa-regular fa-share-nodes fa-lg"></i>
    </toggle-button>

    <ul
      class="wp-block-gds-share__list"
      id="<?php echo e($share_id); ?>"
    >
      <li>
        <clipboard-copy
          text="<?php echo e($url); ?>"
          announce-success="<?php echo e(__('Copied!', 'gds')); ?>"
          announce-failed="<?php echo e(__('Failed to copy!', 'gds')); ?>"
        >
          <i class="fa-regular fa-link fa-xs"></i>
          <span><?php echo e(__('Copy link', 'gds')); ?></span>

          <i data-success-icon class="fa-solid fa-check"></i>
          <i data-failed-icon class="fa-solid fa-xmark"></i>
        </clipboard-copy>
      </li>
      <li>
        <a href="mailto:?subject=<?php echo e(urlencode($title)); ?>&body=<?php echo e(urlencode($url)); ?>" rel="nofollow" target="_blank">
          <i class="fa-regular fa-envelope fa-xs"></i>
          <span><?php echo e(__('Send email', 'gds')); ?></span>
        </a>
      </li>
      <li>
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(urlencode($url)); ?>" rel="nofollow" target="_blank">
          <i class="fab fa-facebook fa-xs"></i>
          <span><?php echo e(__('Share on Facebook', 'gds')); ?></span>
        </a>
      </li>
      <li>
        <a href="https://twitter.com/intent/tweet?text=<?php echo e(urlencode(sprintf('%s %s', $title, $url))); ?>" rel="nofollow" target="_blank">
          <i class="fa-brands fa-twitter fa-xs"></i>
          <span><?php echo e(__('Share on Twitter')); ?></span>
        </a>
      </li>
    </ul>
  </share-button>
</div>
<?php /**PATH /var/www/html/web/app/themes/gds/resources/blocks/share/share.blade.php ENDPATH**/ ?>