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
        Categories
     <?php $__env->endSlot(); ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Categories
                            <a href="<?php echo e(url('categories/create')); ?>" class="btn btn-primary btn-sm float-end">Add Category</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Detail</th>
                                    <th>Is Active</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($category->name); ?></td>
                                        <td><?php echo e($category->detail); ?></td>
                                        <td><?php echo e($category->is_done ? 'Yes' : 'No'); ?></td>
                                        <td>
                                            <a href="<?php echo e(url('categories/' .$loop->iteration. '/edit')); ?>" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="<?php echo e(url('categories/' . $category->id)); ?>" method="POST" class="d-inline">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
<?php /**PATH C:\xampp\htdocs\app\todolist\resources\views/category/index.blade.php ENDPATH**/ ?>