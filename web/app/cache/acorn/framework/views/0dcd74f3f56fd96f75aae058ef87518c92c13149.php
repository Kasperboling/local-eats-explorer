<header class="wp-block-media-text is-stacked-on-mobile is-image-fill has-primary-background-color has-background">
	<figure class="wp-block-media-text__media" style="background-image:url(https://gdsbedrock.ddev.site/app/uploads/2023/08/restaurant-1024x683.jpg);background-position:50% 50%">
		<img decoding="async" width="1024" height="683" src="https://gdsbedrock.ddev.site/app/uploads/2023/08/restaurant-1024x683.jpg" alt="" class="wp-image-44 size-full" srcset="https://gdsbedrock.ddev.site/app/uploads/2023/08/restaurant-1024x683.jpg 1024w, https://gdsbedrock.ddev.site/app/uploads/2023/08/restaurant-300x200.jpg 300w, https://gdsbedrock.ddev.site/app/uploads/2023/08/restaurant-768x512.jpg 768w, https://gdsbedrock.ddev.site/app/uploads/2023/08/restaurant-1536x1024.jpg 1536w, https://gdsbedrock.ddev.site/app/uploads/2023/08/restaurant-2048x1365.jpg 2048w" sizes="(max-width: 1024px) 100vw, 1024px">
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