<footer class="content-info has-gran-background-color has-background">
  <div class="footer">
    <div class="footer__logo">
      <a href="<?php echo e(home_url('/')); ?>" rel="home" aria-label="<?php echo e(sprintf(__('%s frontpage', 'gds'), $siteName)); ?>">
        <img
          src="<?php echo e(Roots\asset('images/logo.png')->uri()); ?>"
          alt=""
          title="<?php echo e(__('Go to frontpage', 'gds')); ?>"
          width="123"
          height="30"
          loading="lazy"
          aria-hidden="true"
        />
      </a>
    </div>
    <nav class="footer__menu" aria-label="<?php echo e(__('Footer navigation', 'gds')); ?>">
      <div class="footer__menu__navigation">
        <?php (dynamic_sidebar('footer-menu')); ?>
      </div>
      <div class="footer__menu__copyright">
        &copy; <?php echo e(date('Y')); ?> BMR. All rights reverved
      </div>
    </nav>
    <div class="footer__social">
      <?php (dynamic_sidebar('footer-social')); ?>
    </div>
  </div>
</footer>
<?php /**PATH /var/www/html/web/app/themes/gds/resources/views/partials/footer.blade.php ENDPATH**/ ?>