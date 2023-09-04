<header class="wp-block-media-text is-stacked-on-mobile is-image-fill has-primary-background-color has-background">
	<figure class="wp-block-media-text__media" style="background-image:url({{get_the_post_thumbnail_url()}});background-position:50% 50%">
		{!! get_the_post_thumbnail() !!}
	</figure>
	<div class="wp-block-media-text__content">
		<h1 class="wp-block-heading">@php(the_title())</h1>
		<p>Cuisine: {{get_field('cuisine')}}</p>
		<p>Location: {{get_field('location')}}</p>
		<p>Price range: {{get_field('price_range')}}</p>
		@block('gds/share')
	</div>
</header>