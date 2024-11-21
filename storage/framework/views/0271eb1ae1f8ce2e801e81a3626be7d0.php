<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e($title ?? 'test'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >

</head>
<body>
    <?php if (isset($component)) { $__componentOriginalaf7ea84cdce97eb6cf55c1e5b16226df = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaf7ea84cdce97eb6cf55c1e5b16226df = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.partials.navbar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('partials.navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaf7ea84cdce97eb6cf55c1e5b16226df)): ?>
<?php $attributes = $__attributesOriginalaf7ea84cdce97eb6cf55c1e5b16226df; ?>
<?php unset($__attributesOriginalaf7ea84cdce97eb6cf55c1e5b16226df); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaf7ea84cdce97eb6cf55c1e5b16226df)): ?>
<?php $component = $__componentOriginalaf7ea84cdce97eb6cf55c1e5b16226df; ?>
<?php unset($__componentOriginalaf7ea84cdce97eb6cf55c1e5b16226df); ?>
<?php endif; ?>
    <div>
        <?php echo e($slot); ?>

    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>
<?php echo e($scripts ??  ''); ?>


</body>
</html><?php /**PATH C:\xampp\htdocs\app\todolist\resources\views/layouts/app-web-layout.blade.php ENDPATH**/ ?>