<div class="teaser teaser--{{ get_post_type() }} {{ $className ?? '' }}">
<figure class="teaser__media">
	@if (has_post_thumbnail())
		{!! wp_get_attachment_image(get_post_thumbnail_id(), 'medium', false, []) !!}
	@else
		<img src="{{ Roots\asset('images/default-teaser.webp') }}" alt="" />
	@endif
</figure>
<div class="teaser__content">
	<h3 class="teaser__title">
	{!! esc_html(get_the_title()) !!}
	</h3>
	<p>{{mb_strimwidth(get_field('content', get_the_ID()), 0, 100, "...")}}</p>
	<p>{{get_field('price_range', get_the_ID())}}</p>
	<p>
		<a class="teaser__readmore teaser__link" href="{{ get_permalink() }}">
			<span>{{ __('Explore More', 'gds') }}</span>
		</a>
	</p>
</div>
</div>
