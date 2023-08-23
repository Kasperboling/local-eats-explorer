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

    <?php if($current_language): ?>
    <div
      aria-label="<?php echo e(__('Language', 'gds')); ?>"
      class="header__languages language-menu"
    >
      <toggle-button
        class="language-menu__toggle"
        aria-controls="language-menu"
      >
        <span aria-hidden="true">
          <?php echo strtoupper(esc_html($current_language->slug)); ?>

        </span>
        <span class="sr-only"><?php echo e(__('Languages')); ?> </span>
        <span class="language-menu__toggle__icon">
          <i class="fa fa-solid fa-chevron-down"></i>
        </span>
      </toggle-button>

      <div
        class="language-menu__menu"
        id="language-menu"
      >
        <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <a
            class="language-menu__link <?php echo e(($item->current_lang ) ? 'is-active': ''); ?>"
            href="<?php echo e($item->url); ?>"
          >
            <?php echo esc_html($item->name); ?>

          </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
    <?php endif; ?>

    <form
      action="<?php echo e(home_url('/')); ?>"
      method="get"
      role="search"
      class="header__search"
    >
      <label for="s" class="sr-only">
        <?php echo e(__('Search this site', 'gds')); ?>

      </label>
      <input slot="input" type="search" name="s" placeholder="<?php echo e(__('Search', 'gds')); ?>" autocomplete="off" />

      <button type="submit" aria-label="<?php echo e(__('Search', 'gds')); ?>">
        <i class="fa fa-solid fa-magnifying-glass"></i>
      </button>
    </form>
  </div>
</header>
<?php /**PATH /var/www/html/web/app/themes/gds/resources/views/partials/header.blade.php ENDPATH**/ ?>