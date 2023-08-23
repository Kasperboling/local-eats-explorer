<?php $__env->startSection('content'); ?>
  <?php if(have_posts()): ?>
    <?php echo $__env->make('partials.page-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $content; ?>


    
                <?php echo render_block([
                    'blockName' => 'gds/article-grid',
                    'attrs' => array_merge(
                        ['name' => 'gds/article-grid'],
                        [
      'use_pagination' => true,
      'query' => $GLOBALS['wp_query'],
      'align' => '',
      'layout' => [
        'type' => 'flex',
        'justifyContent' => 'left'
      ]
    ]
                    ),
                ]); ?>
            
  <?php else: ?>
    <?php if (isset($component)) { $__componentOriginal13e1f50f0bc62a8194c32460ab51a9dc01c30e0e = $component; } ?>
<?php $component = App\View\Components\NotFound::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('not-found'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\NotFound::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
       <?php $__env->slot('header', null, []); ?> 
        <?php echo $__env->make('partials.page-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       <?php $__env->endSlot(); ?>

      <?php echo $content; ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal13e1f50f0bc62a8194c32460ab51a9dc01c30e0e)): ?>
<?php $component = $__componentOriginal13e1f50f0bc62a8194c32460ab51a9dc01c30e0e; ?>
<?php unset($__componentOriginal13e1f50f0bc62a8194c32460ab51a9dc01c30e0e); ?>
<?php endif; ?>
  <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/web/app/themes/gds/resources/views/archive.blade.php ENDPATH**/ ?>