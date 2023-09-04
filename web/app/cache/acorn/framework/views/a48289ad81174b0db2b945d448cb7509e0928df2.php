
                <?php echo render_block([
                    'blockName' => 'gds/breadcrumb',
                    'attrs' => array_merge(
                        ['name' => 'gds/breadcrumb'],
                        
                    ),
                ]); ?>
            

                <?php echo render_block([
                    'blockName' => 'core/media-text',
                    'attrs' => array_merge(
                        ['name' => 'core/media-text'],
                        
                    ),
                ]); ?>
            

<?php
$variable = 0;
d(get_post_meta(get_the_ID()));
?>

<article <?php (post_class('alignwide entry')); ?>>
    <?php echo $__env->make('partials.restaurant-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="entry__content entry-content">
        <h3>About</h3>
        <?php (the_content()); ?>
        <h3>Signature dishes</h3>
        <?php
        $fieldValueString = get_field('signature_dishes');
        $fieldValues = explode(',', $fieldValueString);
        ?>
        <ul>
            <?php $__currentLoopData = $fieldValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($value); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <h3>Opening hours</h3>
        <?php
        $fieldValueString = get_field('opening_hours');
        $fieldValues = explode(',', $fieldValueString);
        ?>

        <ul>
            <?php $__currentLoopData = $fieldValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($value); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <?php if(get_field('website')): ?>
            <h3>Website</h3>
            <a href="<?php echo e(get_field('website')); ?>" target="_blank"><?php echo e(get_field('website')); ?></a>
        <?php endif; ?>
    </div>

    <aside class="entry__sidebar">
        <?php if($related && $related->have_posts()): ?>
            <h2><?php echo e(__('Related articles', 'gds')); ?></h2>
            <div class="entry__related">
                <?php while($related->have_posts()): ?> <?php ($related->the_post()); ?>
                    <?php echo $__env->make('teasers.restaurant', [
                        'post' => get_post(),
                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </aside>
</article>
<?php /**PATH /var/www/html/web/app/themes/gds/resources/views/content/restaurant.blade.php ENDPATH**/ ?>