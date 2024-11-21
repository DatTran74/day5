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
        Edit Category
     <?php $__env->endSlot(); ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <?php if(session('status')): ?>
                    <div class="alert alert-success"><?php echo e(session('status')); ?></div>
                <?php endif; ?>
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Edit Category
                            <a href="<?php echo e(url('categories')); ?>" class="btn btn-primary btn-sm float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(url('categories/' . $category->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" value="<?php echo e($category->name); ?>"/>
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="mb-3">
                                <label for="detail" class="form-label">Detail</label>
                                <textarea name="detail" class="form-control" rows="5"><?php echo e($category->detail); ?></textarea>
                                <?php $__errorArgs = ['detail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="mb-3">
                                <label for="is_done" class="form-label">Is Done</label>
                                <input type="checkbox" name="is_done" <?php echo e($category->is_done ? 'checked' : ''); ?> />
                                <?php $__errorArgs = ['is_done'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
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
<?php endif; ?><?php /**PATH C:\xampp\htdocs\app\todolist\resources\views/category/edit.blade.php ENDPATH**/ ?>