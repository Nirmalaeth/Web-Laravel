<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($category); ?> - Nir's Bakery</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .fade-in {
            animation: fadeIn 1s ease-in;
        }
        
        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        @keyframes scroll-left {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }
        .announcement-scroll {
            white-space: nowrap;
            animation: scroll-left 20s linear infinite;
        }
    </style>
</head>
<body class="bg-[#FDE8E8]">
    <!-- Announcement Bar -->
    <div class="bg-[#D17B88] text-white overflow-hidden">
        <div class="announcement-scroll py-2 px-4">
        <p>Free delivery for orders within a 2 km radius around Sleman | Happy Shopping!</p>

        </div>
    </div>
<body class="bg-[#FDE8E8]">
    <!-- Navigation Bar -->
    <nav class="bg-[#FFF7E6] shadow-lg">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center space-x-8">
                    <a href="/" class="flex-shrink-0">
                        <img src="/images/kucingcute-removebg-preview.png" alt="Nir's Bakery Logo" class="h-12 w-auto">
                    </a>
                    <div class="hidden md:flex items-center space-x-8">
                        <a href="/" class="text-[#D17B88] hover:text-[#F28482]">Home</a>
                        <!-- Shop Dropdown -->
<div class="relative group">
    <button id="dropdownButton" class="text-[#D17B88] hover:text-[#F28482] flex items-center">
        Shop
        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </button>
    <div id="dropdownMenu" class="absolute hidden bg-[#FFF7E6] mt-2 py-2 w-48 rounded-md shadow-xl group-hover:block z-50">
        <a href="/shop/Sourdough Bread" class="block px-4 py-2 text-[#D17B88] hover:bg-[#FDE8E8] rounded-md">Sourdough Bread</a>
        <a href="/shop/Stuffed Bread" class="block px-4 py-2 text-[#D17B88] hover:bg-[#FDE8E8] rounded-md">Stuffed Bread</a>
        <a href="/shop/Cake" class="block px-4 py-2 text-[#D17B88] hover:bg-[#FDE8E8] rounded-md">Cake</a>
        <a href="/shop/Beverages" class="block px-4 py-2 text-[#D17B88] hover:bg-[#FDE8E8] rounded-md">Beverages</a>
    </div>
</div>

                        <a href="/about" class="text-[#D17B88] hover:text-[#F28482]">About Us</a>
                    </div>
                </div>

                <!-- Login/Register Links -->
                <?php if(Route::has('login')): ?>
                    <div class="flex items-center space-x-4">
                        <?php if(auth()->guard()->check()): ?>
                            <a href="<?php echo e(url('/dashboard')); ?>" class="text-[#D17B88] hover:text-[#F28482]">Dashboard</a>
                        <?php else: ?>
                            <a href="<?php echo e(route('login')); ?>" class="text-[#D17B88] hover:text-[#F28482]">Login</a>
                            <?php if(Route::has('register')): ?>
                                <a href="<?php echo e(route('register')); ?>" class="text-[#D17B88] hover:text-[#F28482]">Register</a>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-16">
        <div class="max-w-6xl mx-auto">
            <h1 class="text-4xl font-bold text-[#B09076] mb-8 fade-in">Stuffed Bread</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Card 1 -->
                <div class="group relative bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105">
                    <img src="/images/cheesebread.jpg" alt="Cheese Stuffed Bread" class="w-full h-64 object-cover transition-opacity duration-500 opacity-90 group-hover:opacity-100">
                    <div class="absolute inset-0 bg-black bg-opacity-25 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="absolute bottom-0 left-0 right-0 bg-[#FFF7E6] bg-opacity-90 py-4 px-6">
                        <p class="text-[#D17B88] text-lg font-semibold">Cheese Stuffed Bread</p>
                        <p class="text-[#D17B88] text-lg font-semibold">Rp 35.000</p>
                </div>
            </div>
                <!-- Card 2 -->
                <div class="group relative bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105">
                    <img src="/images/meatbread.jpg" alt="Meat Stuffed Bread" class="w-full h-64 object-cover transition-opacity duration-500 opacity-90 group-hover:opacity-100">
                    <div class="absolute inset-0 bg-black bg-opacity-25 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="absolute bottom-0 left-0 right-0 bg-[#FFF7E6] bg-opacity-90 py-4 px-6">
                        <p class="text-[#D17B88] text-lg font-semibold">Meat Stuffed Bread</p>
                        <p class="text-[#D17B88] text-lg font-semibold">Rp 55.000</p>
                </div>
            </div>
                <!-- Card 3 -->
                <div class="group relative bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105">
                    <img src="/images/vegan.jpg" alt="Vegetable Stuffed Bread" class="w-full h-64 object-cover transition-opacity duration-500 opacity-90 group-hover:opacity-100">
                    <div class="absolute inset-0 bg-black bg-opacity-25 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="absolute bottom-0 left-0 right-0 bg-[#FFF7E6] bg-opacity-90 py-4 px-6">
                        <p class="text-[#D17B88] text-lg font-semibold">Vegetable Stuffed Bread</p>
                        <p class="text-[#D17B88] text-lg font-semibold">Rp 50.000</p>
                </div>
            </div>
                <!-- Card 4 -->
                <div class="group relative bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105">
                    <img src="/images/specialbread.jpg" alt="Special Stuffed Bread" class="w-full h-64 object-cover transition-opacity duration-500 opacity-90 group-hover:opacity-100">
                    <div class="absolute inset-0 bg-black bg-opacity-25 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="absolute bottom-0 left-0 right-0 bg-[#FFF7E6] bg-opacity-90 py-4 px-6">
                        <p class="text-[#D17B88] text-lg font-semibold">Special Stuffed Bread</p>
                        <p class="text-[#D17B88] text-lg font-semibold">Rp 60.000</p>
                </div>
            </div>
            </div>
        </div>
    </div>

    <footer class="bg-[#D17B88] text-white py-8 w-full absolute left-0 right-0">
    <!-- Footer Content -->
    <div class="w-full px-6 md:px-12 grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- About Section -->
        <div>
            <h3 class="text-lg font-semibold mb-4">About Nir's Bakery</h3>
            <p class="text-sm leading-relaxed">
                At Nir's Bakery, we bake with love to bring you the best pastries and desserts. Visit us and taste the difference.
            </p>
        </div>

        <!-- Quick Links Section -->
        <div class="text-center">
            <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
            <ul class="space-y-2">
                <li><a href="/" class="text-sm hover:underline">Home</a></li>
                <li><a href="/about" class="text-sm hover:underline">About Us</a></li>
            </ul>
        </div>

        <!-- Contact Details Section -->
        <div>
            <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
            <p class="text-sm">Email: contact@nirsbakery.com</p>
            <p class="text-sm">Phone: +6281 91991 5958</p>
            <p class="text-sm">Address: 52 Pundung, Yogyakarta</p>
            <div class="mt-4 flex space-x-4">
                <a href="#" class="text-white hover:text-gray-300">
                    <i class="fab fa-facebook-f text-lg"></i>
                </a>
                <a href="#" class="text-white hover:text-gray-300">
                    <i class="fab fa-instagram text-lg"></i>
                </a>
                <a href="#" class="text-white hover:text-gray-300">
                    <i class="fab fa-twitter text-lg"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Bottom Section -->
    <div class="mt-6 border-t border-white pt-6 text-center text-sm">
        <p>&copy; 2025 Nir's Bakery. All rights reserved.</p>
    </div>
</footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const dropdownButton = document.querySelector('#dropdownButton');
            const dropdownMenu = document.querySelector('#dropdownMenu');

            dropdownButton.addEventListener('click', () => {
                dropdownMenu.classList.toggle('hidden');
            });
        });
    </script>
</body>
</html><?php /**PATH C:\xampp\htdocs\nir_bakery\resources\views/shop/stuffed.blade.php ENDPATH**/ ?>