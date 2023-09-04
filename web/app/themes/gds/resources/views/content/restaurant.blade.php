@block('gds/breadcrumb')
@block('core/media-text')

@php
$variable = 0;
d(get_post_meta(get_the_ID()));
@endphp

<article @php(post_class('alignwide entry'))>
    @include('partials.restaurant-header')

    <div class="entry__content entry-content">
        <h3>About</h3>
        @php(the_content())
        <h3>Signature dishes</h3>
        <?php
        $fieldValueString = get_field('signature_dishes');
        $fieldValues = explode(',', $fieldValueString);
        ?>
        <ul>
            @foreach($fieldValues as $value)
                <li>{{ $value }}</li>
            @endforeach
        </ul>
        <h3>Opening hours</h3>
        <?php
        $fieldValueString = get_field('opening_hours');
        $fieldValues = explode(',', $fieldValueString);
        ?>

        <ul>
            @foreach($fieldValues as $value)
                <li>{{ $value }}</li>
            @endforeach
        </ul>
        @if(get_field('website'))
            <h3>Website</h3>
            <a href="{{get_field('website')}}" target="_blank">{{get_field('website')}}</a>
        @endif
    </div>

    <aside class="entry__sidebar">
        @if ($related && $related->have_posts())
            <h2>{{ __('Related articles', 'gds') }}</h2>
            <div class="entry__related">
                @while ($related->have_posts()) @php($related->the_post())
                    @include('teasers.restaurant', [
                        'post' => get_post(),
                    ])
                @endwhile
            </div>
        @endif
    </aside>
</article>
