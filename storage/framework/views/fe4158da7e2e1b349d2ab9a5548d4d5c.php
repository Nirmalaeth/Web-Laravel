<!-- resources/views/admin/products/create.blade.php -->


<?php $__env->startSection('content'); ?>
    <h1>Add New Product</h1>
    <form action="<?php echo e(route('products.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="mb-4">
            <label for="name">Name</label>
            <input type="text" name="name" required class="form-input">
        </div>

        <div class="mb-4">
            <label for="price">Price</label>
            <input type="number" name="price" required class="form-input">
        </div>

        <div class="mb-4">
    <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
    <select name="category" id="category" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
        <option value="">Select Category</option>
        <option value="Cake" <?php echo e(isset($product) && $product->category == 'Cake' ? 'selected' : ''); ?>>Cake</option>
        <option value="Sourdough Bread" <?php echo e(isset($product) && $product->category == 'Sourdough Bread' ? 'selected' : ''); ?>>Sourdough Bread</option>
        <option value="Stuffed Bread" <?php echo e(isset($product) && $product->category == 'Stuffed Bread' ? 'selected' : ''); ?>>Stuffed Bread</option>
        <option value="Beverages" <?php echo e(isset($product) && $product->category == 'Beverages' ? 'selected' : ''); ?>>Beverages</option>
    </select>
</div>

        <div class="mb-4">
            <label for="description">Description</label>
            <textarea name="description" class="form-textarea"></textarea>
        </div>

        <div class="mb-4">
            <label for="stock">Stock</label>
            <input type="number" name="stock" class="form-input">
        </div>

        <div class="mb-4">
            <label for="image">Product Image</label>
            <input type="file" name="image" accept="image/*" required class="form-input">
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nir_bakery\resources\views/admin/products/create.blade.php ENDPATH**/ ?>