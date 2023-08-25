<header class="header" id="header">
  <div class="header__inner-container">
    <a
      class="header__logo"
      href="<?php echo e(home_url('/')); ?>"
      rel="home"
      aria-label="<?php echo e(sprintf(__('%s frontpage', 'gds'), $siteName)); ?>"
    >
      <img
        src="<?php echo e(Roots\asset('images/logo.png')->uri()); ?>"
        alt=""
        title="<?php echo e(__('Go to frontpage', 'gds')); ?>"
        width="159"
        height="48"
        loading="eager"
        aria-hidden="true"
      />
    </a>

    <toggle-button
      class="header__menu-toggler"
      aria-controls="header"
    >
      <span
        class="header__menu-toggler-icon"
        aria-hidden="true"
      ></span>
      <span class="sr-only"><?php echo e(__('Menu', 'gds')); ?></span>
    </toggle-button>

    <nav
      aria-label="<?php echo e(__('Primary menu', 'gds')); ?>"
      class="header__navigation"
    >
      <?php if($primary_navigation): ?>
        <div class="menu">
          <?php $__currentLoopData = $primary_navigation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('partials.menu-item', ['item' => $item], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      <?php endif; ?>
    </nav>
    <div class="header__account">
      <a href="https://gdsbedrock.ddev.site/?page_id=130">
        <img
        src="<?php echo e(Roots\asset('../images/account.png')->uri()); ?>"
        alt=""
        loading="lazy"
        aria-hidden="true"
        />
      </a>
    </div>
  </div>
</header>
<?php /**PATH /var/www/html/web/app/themes/gds/resources/views/partials/header.blade.php ENDPATH**/ ?>