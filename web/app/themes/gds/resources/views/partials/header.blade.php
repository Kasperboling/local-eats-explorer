<header class="header" id="header">
  <div class="header__inner-container">
    <a
      class="header__logo"
      href="{{ home_url('/') }}"
      rel="home"
      aria-label="{{ sprintf(__('%s frontpage', 'gds'), $siteName) }}"
    >
      <img
        src="{{ Roots\asset('images/logo.png')->uri() }}"
        alt=""
        title="{{ __('Go to frontpage', 'gds') }}"
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
      <span class="sr-only">{{ __('Menu', 'gds') }}</span>
    </toggle-button>

    <nav
      aria-label="{{ __('Primary menu', 'gds') }}"
      class="header__navigation"
    >
      @if ($primary_navigation)
        <div class="menu">
          @foreach ($primary_navigation as $item)
            @include('partials.menu-item', ['item' => $item])
          @endforeach
        </div>
      @endif
    </nav>
    <div class="header__account">
      <a href="https://gdsbedrock.ddev.site/?page_id=130">
        <img
        src="{{ Roots\asset('../images/account.png')->uri() }}"
        alt=""
        loading="lazy"
        aria-hidden="true"
        />
      </a>
    </div>
  </div>
</header>
