<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakes - Nir's Bakery</title>
    <link rel="stylesheet" href="path/to/your/css/styles.css"> <!-- Ganti dengan path CSS Anda -->
</head>
<body>
    <h1>Cakes</h1>
    <div class="product-list">
        <?php if(isset($products) && $products->isEmpty()): ?>
            <p>No cakes available.</p>
        <?php else: ?>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cake): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="product-card">
                    <img src="<?php echo e(asset($cake->image)); ?>" alt="<?php echo e($cake->name); ?>">
                    <h2><?php echo e($cake->name); ?></h2>
                    <p><?php echo e($cake->description); ?></p>
                    <p>Price: Rp <?php echo e(number_format($cake->price, 2)); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\nir_bakery\resources\views/cake.blade.php ENDPATH**/ ?>