@block('gds/breadcrumb')

<article @php(post_class('alignwide entry'))>
  <header class="entry__header">
    @include('partials.page-header')
    @block('gds/share')
  </header>

  <div class="entry__content entry-content">
    @php(the_content())
  </div>

  <aside class="entry__sidebar">
    @if ($related && $related->have_posts())
      <h2>{{ __('Related articles', 'gds') }}</h2>

      <div class="entry__related">
        @while ($related->have_posts()) @php($related->the_post())
          @includeFirst(['teasers.' . get_post_type(), 'teasers.teaser'], [
            'post' => get_post(),
          ])
        @endwhile
      </div>
    @endif
  </aside>
</article>
