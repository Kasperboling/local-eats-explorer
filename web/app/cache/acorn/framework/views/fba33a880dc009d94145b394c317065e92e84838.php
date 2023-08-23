<div
  class="menu-item <?php echo e($item->children ? 'has-child' : ''); ?>"
  id="menu-item-<?php echo e($item->id); ?>"
>
  <a
    class="menu-item__link <?php echo e(($item->active || $item->activeAncestor) ? 'is-active': ''); ?>"
    href="<?php echo e($item->url); ?>"
    target="<?php echo e($item->target ?? ''); ?>"
    title="<?php echo e($item->title ?? ''); ?>"
    <?php if($item->active): ?> aria-current="page" <?php endif; ?>
  >
    <?php echo esc_html($item->label); ?>

  </a>

  <?php if($item->children): ?>
    <toggle-button
      class="menu-item__toggle"
      aria-haspopup="true"
      aria-controls="submenu-<?php echo e($item->id); ?> menu-item-<?php echo e($item->id); ?>"
      aria-label="<?php echo e($item->label); ?>"
    >
      <i class="fa fa-solid fa-chevron-down"></i>
    </toggle-button>

    <div
      class="menu-item__submenu"
      id="submenu-<?php echo e($item->id); ?>"
      role="region"
      aria-label="<?php echo e($item->label); ?>"
    >
      <?php $__currentLoopData = $item->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make('partials.menu-item', ['item' => $child], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  <?php endif; ?>
</div>
<?php /**PATH /var/www/html/web/app/themes/gds/resources/views/partials/menu-item.blade.php ENDPATH**/ ?>