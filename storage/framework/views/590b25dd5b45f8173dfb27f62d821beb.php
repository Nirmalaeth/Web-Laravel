

<?php $__env->startSection('content'); ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <div class="text-center">
        <h1>Welcome to Nir's Bakery Admin Dashboard</h1>
        <p class="mt-3">Manage your products, orders, and users with ease!</p>
    </div>
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Products</h5>
                    <p class="card-text">Manage your product inventory.</p>
                    <a href="<?php echo e(route('products.index')); ?>" class="btn btn-primary">View Products</a>
                </div>
            </div>
        </div>
        <!-- Tambahkan fitur lainnya (seperti Orders, Users) di sini -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nir_bakery\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>