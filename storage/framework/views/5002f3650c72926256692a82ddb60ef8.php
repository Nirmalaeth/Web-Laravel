

<?php $__env->startSection('content'); ?>
    <h1 class="mb-4">Products</h1>
    <a href="<?php echo e(route('products.create')); ?>" class="btn btn-success mb-3">Add New Product</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($product->name); ?></td>
                    <td><?php echo e($product->description); ?></td>
                    <td>$<?php echo e(number_format($product->price, 2)); ?></td>
                    <td>
                        <a href="<?php echo e(route('products.edit', $product->id)); ?>" class="btn btn-primary btn-sm">Edit</a>
                        <form action="<?php echo e(route('products.destroy', $product->id)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nir_bakery\resources\views/admin/products/index.blade.php ENDPATH**/ ?>