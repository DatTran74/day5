<?php if (isset($component)) { $__componentOriginaldb3b0e96aa6f22b7d271a8ea12bb47c5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldb3b0e96aa6f22b7d271a8ea12bb47c5 = $attributes; } ?>
<?php $component = App\View\Components\AppWebLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-web-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppWebLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> 
        My app
         <?php $__env->endSlot(); ?>
    <div class="py-5">
        <div class="container">
            <h4>Welcome test</h4>
        </div>
        </div>
         <?php $__env->slot('scripts', null, []); ?> 
        hello there
         <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldb3b0e96aa6f22b7d271a8ea12bb47c5)): ?>
<?php $attributes = $__attributesOriginaldb3b0e96aa6f22b7d271a8ea12bb47c5; ?>
<?php unset($__attributesOriginaldb3b0e96aa6f22b7d271a8ea12bb47c5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldb3b0e96aa6f22b7d271a8ea12bb47c5)): ?>
<?php $component = $__componentOriginaldb3b0e96aa6f22b7d271a8ea12bb47c5; ?>
<?php unset($__componentOriginaldb3b0e96aa6f22b7d271a8ea12bb47c5); ?>
<?php endif; ?>

<?php /**PATH C:\xampp\htdocs\app\todolist\resources\views/frontend/index.blade.php ENDPATH**/ ?>