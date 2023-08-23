<footer class="content-info has-gran-background-color has-background">
  <div class="footer">
    <div class="footer__logo">
      <a href="{{ home_url('/') }}" rel="home" aria-label="{{ sprintf(__('%s frontpage', 'gds'), $siteName) }}">
        <img
          src="{{ Roots\asset('images/logo.png')->uri() }}"
          alt=""
          title="{{ __('Go to frontpage', 'gds') }}"
          width="123"
          height="30"
          loading="lazy"
          aria-hidden="true"
        />
      </a>
    </div>
    <nav class="footer__menu" aria-label="{{ __('Footer navigation', 'gds') }}">
      <div class="footer__menu__navigation">
        @php(dynamic_sidebar('footer-menu'))
      </div>
      <div class="footer__menu__copyright">
        &copy; {{date('Y')}} Local Eats Explorer. All rights reverved
      </div>
    </nav>
    <div class="footer__social">
      @php(dynamic_sidebar('footer-social'))
    </div>
  </div>
</footer>
