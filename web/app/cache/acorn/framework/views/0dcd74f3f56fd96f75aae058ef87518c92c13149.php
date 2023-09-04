<header class="wp-block-media-text is-stacked-on-mobile is-image-fill has-primary-background-color has-background">
	<figure class="wp-block-media-text__media" style="background-image:url(<?php echo e(get_the_post_thumbnail_url()); ?>);background-position:50% 50%">
		<?php echo get_the_post_thumbnail(); ?>

	</figure>
	<div class="wp-block-media-text__content">
		<h1 class="wp-block-heading"><?php (the_title()); ?></h1>
		<p>Cuisine: <?php echo e(get_field('cuisine')); ?></p>
		<p>Location: <?php echo e(get_field('location')); ?></p>
		<p>Price range: <?php echo e(get_field('price_range')); ?></p>
		
                <?php echo render_block([
                    'blockName' => 'gds/share',
                    'attrs' => array_merge(
                        ['name' => 'gds/share'],
                        
                    ),
                ]); ?>
            
	</div>
</header><?php /**PATH /var/www/html/web/app/themes/gds/resources/views/partials/restaurant-header.blade.php ENDPATH**/ ?>