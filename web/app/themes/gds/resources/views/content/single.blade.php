@block('gds/breadcrumb')
@block('core/media-text')

<article @php(post_class('alignwide entry'))>
    @include('partials.page-header')

    <div class="entry__content entry-content">
        <p>@php(the_content())</p>
    </div>

    <aside class="entry__sidebar">
        @if ($related && $related->have_posts())
            <h2>{{ __('Related articles', 'gds') }}</h2>
            <div class="entry__related">
                @while ($related->have_posts()) @php($related->the_post())
                    @include('teasers.post', [
                        'post' => get_post(),
                    ])
                @endwhile
            </div>
        @endif
    </aside>
</article>
