<div class="teaser teaser--<?php echo e(get_post_type()); ?> <?php echo e($className ?? ''); ?>">
<figure class="teaser__media">
	<?php if(has_post_thumbnail()): ?>
		<?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'medium', false, []); ?>

	<?php else: ?>
		<img src="<?php echo e(Roots\asset('images/default-teaser.webp')); ?>" alt="" />
	<?php endif; ?>
</figure>
<div class="teaser__content">
	<h3 class="teaser__title">
	<?php echo esc_html(get_the_title()); ?>

	</h3>
	<p><?php echo e(mb_strimwidth(get_field('content', get_the_ID()), 0, 100, "...")); ?></p>
	<p><?php echo e(get_field('price_range', get_the_ID())); ?></p>
	<p>
		<a class="teaser__readmore teaser__link" href="<?php echo e(get_permalink()); ?>">
			<span><?php echo e(__('Explore More', 'gds')); ?></span>
		</a>
	</p>
</div>
</div>
<?php /**PATH /var/www/html/web/app/themes/gds/resources/views/teasers/restaurant.blade.php ENDPATH**/ ?>