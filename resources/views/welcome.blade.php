<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Nir's Bakery</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <style>
        .fade-in {
            animation: fadeIn 1s ease-in;
        }
        
        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        
        .image-parallax {
            transition: transform 0.5s ease;
        }
        
        .image-parallax:hover {
            transform: scale(1.05);
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
    <!-- Navigation Bar (sama seperti home) -->
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
                    <div class="dropdown">
                        <button class="dropdown-toggle text-[#D17B88] hover:text-[#F28482]" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            Shop
                        </button>
                        <ul class="dropdown-menu bg-[#FFF7E6]" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item text-[#D17B88] hover:bg-[#FDE8E8]" href="/shop/Sourdough Bread">Sourdough Bread</a></li>
                            <li><a class="dropdown-item text-[#D17B88] hover:bg-[#FDE8E8]" href="/shop/Stuffed Bread">Stuffed Bread</a></li>
                            <li><a class="dropdown-item text-[#D17B88] hover:bg-[#FDE8E8]" href="/shop/Cake">Cake</a></li>
                            <li><a class="dropdown-item text-[#D17B88] hover:bg-[#FDE8E8]" href="/shop/Beverages">Beverages</a></li>
                        </ul>
                    </div>

                        <a href="/about" class="text-[#D17B88] hover:text-[#F28482] font-semibold">About Us</a>
                    </div>
                </div>

                <!-- Login/Register Links -->
                @if (Route::has('login'))
                    <div class="flex items-center space-x-4">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-[#D17B88] hover:text-[#F28482]">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-[#D17B88] hover:text-[#F28482]">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-[#D17B88] hover:text-[#F28482]">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </nav>

    <div class="min-h-screen">
        <!-- Main Content -->
        <div class="container mx-auto px-4">
            <!-- Header -->
             <!-- Header remains the same -->
<header class="text-center py-12">
    <h1 class="text-4xl font-bold text-[#D17B88] mb-2">Welcome to Nir's Bakery</h1>
    <p class="text-[#D17B88] mb-8">Where every bite is a taste of warmth, with freshly baked delights delivered right to your door!</p>
    
    <div class="inline-block relative group mb-12">
        <h2 class="text-2xl font-semibold text-[#D17B88] px-6 py-2 bg-[#FFF7E6] rounded-lg shadow-md transition-all duration-300 group-hover:shadow-lg group-hover:scale-105">
            Catalog
        </h2>
        <div class="absolute -bottom-1 left-0 w-full h-0.5 bg-[#D17B88] transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></div>
    </div>
</header>

<!-- Updated product container with lightbox functionality -->
<div class="max-w-7xl mx-auto px-8">
    <div class="flex justify-center items-center gap-8 mb-12">
        <!-- Product Cards with Lightbox -->
        <div id="gallery" class="flex space-x-8">
            <!-- Product Card 1 -->
            <div class="gallery-item cursor-pointer w-72 transition-all duration-300 hover:shadow-xl">
                <img src="/images/Easy S'mores Desserts For Sultry Summers - RecipeMagik.jpeg" 
                     alt="Cookies" 
                     class="w-full h-48 object-cover rounded-lg">
                <div class="text-center mt-2 px-6 py-2 bg-[#FFF7E6] rounded-lg shadow-md transition-all duration-300">
                    Click Photos
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="gallery-item cursor-pointer w-72 transition-all duration-300 hover:shadow-xl">
                <img src="/images/breadphp.jpg" 
                     alt="Fresh Bread" 
                     class="w-full h-48 object-cover rounded-lg">
                <div class="text-center mt-2 px-6 py-2 bg-[#FFF7E6] rounded-lg shadow-md transition-all duration-300">
                    Click Photos
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="gallery-item cursor-pointer w-72 transition-all duration-300 hover:shadow-xl">
                <img src="/images/donatphp.jpg" 
                     alt="Doughnuts" 
                     class="w-full h-48 object-cover rounded-lg">
                <div class="text-center mt-2 px-6 py-2 bg-[#FFF7E6] rounded-lg shadow-md transition-all duration-300">
                    Click Photos
                </div>
            </div>

            <!-- Product Card 4 -->
            <div class="gallery-item cursor-pointer w-72 transition-all duration-300 hover:shadow-xl">
                <img src="/images/specialtyitemsphp.jpg" 
                     alt="Specialty Items" 
                     class="w-full h-48 object-cover rounded-lg">
                <div class="text-center mt-2 px-6 py-2 bg-[#FFF7E6] rounded-lg shadow-md transition-all duration-300">
                    Click Photos
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Lightbox Modal -->
<div id="lightbox" class="fixed inset-0 bg-black bg-opacity-90 hidden z-50">
    <button class="absolute top-4 right-4 text-white text-4xl" onclick="closeLightbox()">&times;</button>
    
    <!-- Previous button -->
    <button class="absolute left-4 top-1/2 transform -translate-y-1/2 text-white text-4xl" onclick="changeImage(-1)">&#10094;</button>
    
    <!-- Next button -->
    <button class="absolute right-4 top-1/2 transform -translate-y-1/2 text-white text-4xl" onclick="changeImage(1)">&#10095;</button>
    
    <!-- Main image container -->
    <div class="flex items-center justify-center h-full">
        <img id="lightbox-img" class="max-h-[80vh] max-w-[80vw] object-contain" src="" alt="Enlarged product">
    </div>
</div>

<style>
    .gallery-item {
        transition: transform 0.3s ease;
    }
    
    .gallery-item:hover {
        transform: translateY(-5px);
    }

    .coming-soon-text {
    font-style: italic;
    color: white;
    font-size: 24px;
    text-align: center;
    margin-top: 20px;
    font-weight: bold;
}

    
    #lightbox {
        transition: opacity 0.3s ease;
    }
    
    #lightbox.fade-in {
        opacity: 1;
    }
    
    #lightbox.fade-out {
        opacity: 0;
    }
</style>

<script>
let currentImageIndex = 0;
const images = document.querySelectorAll('.gallery-item img');
const lightbox = document.getElementById('lightbox');
const lightboxImg = document.getElementById('lightbox-img');

// Handle 'Specialty Items' specific case
const specialtyItemImage = document.getElementById('specialty-item-img');

// Initialize gallery
images.forEach((img, index) => {
    img.addEventListener('click', () => {
        currentImageIndex = index;
        if (img === specialtyItemImage) {
            showComingSoon(); // Show "Coming Soon" message for Specialty Items
        } else {
            showLightbox(img.src); // Show the lightbox for other images
        }
    });
});

function showLightbox(src) {
    lightboxImg.src = src;
    lightbox.classList.remove('hidden');
    lightbox.classList.add('fade-in');
}

function showComingSoon() {
    lightboxImg.src = ''; // Clear the image
    lightbox.classList.remove('hidden');
    lightbox.classList.add('fade-in');

    // Create the "Coming Soon" message
    const comingSoonMessage = document.createElement('div');
    comingSoonMessage.classList.add('coming-soon-text');
    comingSoonMessage.innerText = 'Coming Soon';
    
    lightboxImg.parentElement.appendChild(comingSoonMessage);
}

function closeLightbox() {
    lightbox.classList.add('fade-out');
    setTimeout(() => {
        lightbox.classList.add('hidden');
        lightbox.classList.remove('fade-out');
        const comingSoonMessage = document.querySelector('.coming-soon-text');
        if (comingSoonMessage) {
            comingSoonMessage.remove();
        }
    }, 300);
}

function closeLightbox() {
    lightbox.classList.add('fade-out');
    setTimeout(() => {
        lightbox.classList.add('hidden');
        lightbox.classList.remove('fade-out');
    }, 300);
}

function changeImage(direction) {
    currentImageIndex = (currentImageIndex + direction + images.length) % images.length;
    lightboxImg.src = images[currentImageIndex].src;
}

// Close lightbox when clicking outside the image
lightbox.addEventListener('click', (e) => {
    if (e.target === lightbox) {
        closeLightbox();
    }
});

// Handle keyboard navigation
document.addEventListener('keydown', (e) => {
    if (!lightbox.classList.contains('hidden')) {
        if (e.key === 'Escape') closeLightbox();
        if (e.key === 'ArrowLeft') changeImage(-1);
        if (e.key === 'ArrowRight') changeImage(1);
    }
});
</script>

            
                
            <div class="bg-[#FDE8E8] min-h-screen flex items-center justify-center px-4">
    <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <!-- Teks -->
        <div>
            <img src="/images/kucingcute-removebg-preview.png" alt="Logo Nir's Bakery" class="w-20 h-20 mb-4">
            <h2 class="text-2xl md:text-3xl font-bold text-[#D17B88] mb-4">
                Best seller menu!
            </h2>
            <p class="text-[#D17B88]">
                French Croissant - Buttery & Flaky
            </p>
        </div>
        <!-- Gambar -->
        <div>
            <div class="group relative w-full md:w-[450px] h-[450px] bg-white rounded-lg shadow-2xl overflow-hidden transition-transform transform hover:scale-105 hover:shadow-xl">
                <img src="/images/kwasonkphp.jpg" alt="Our treats" class="w-full h-full object-cover transition-opacity duration-500 opacity-90 group-hover:opacity-100">
                <div class="absolute inset-0 bg-black bg-opacity-25 opacity-0 group-hover:opacity-100 transition-opacity"></div>
            </div>
        </div>
    </div>
</div>




<!-- Add these styles in the head section -->
<style>
    .hover-scale {
        transition: transform 0.3s ease-in-out;
    }
    .hover-scale:hover {
        transform: scale(1.02);
    }
    
    .image-zoom {
        transition: transform 0.5s ease;
        overflow: hidden;
    }
    .image-zoom:hover img {
        transform: scale(1.1);
    }
    
    .floating {
        animation: floating 3s ease-in-out infinite;
    }
    
    @keyframes floating {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
        100% { transform: translateY(0px); }
    }
    
    .slide-in {
        animation: slideIn 0.8s ease-out;
    }
    
    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .pulse {
        animation: pulse 2s infinite;
    }
    
    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
    }
    
    .fade-in {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }
    
    .fade-in.visible {
        opacity: 1;
        transform: translateY(0);
    }
    .coming-soon-text {
    font-style: italic;
    color: white;
    font-size: 24px;
    text-align: center;
    margin-top: 20px;
    font-weight: bold;
}

</style>

<!-- Section: warning -->
<section class="bg-[#FFF7E6] py-16 mb-16">
    <div class="container mx-auto px-4">
        <!-- Main heading with animated decorative elements -->
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-[#B09076] inline-block relative hover-scale">
                Warning!
                <div class="absolute w-24 h-1 bg-[#D17B88] left-1/2 -translate-x-1/2 bottom--4 pulse"></div>
            </h2>
        </div>

        <!-- New Layout Structure -->
        <div class="space-y-16">
           <!-- Feature 1: Our Menu -->
<!-- Feature 1: Our Menu -->
<div class="flex flex-col md:flex-row items-center gap-8 hover-scale">
    <div class="md:w-1/2 image-zoom rounded-2xl overflow-hidden shadow-xl relative">
        <!-- Sliding Images Container -->
        <div class="slider-container relative w-full h-[400px] overflow-hidden">
            <div class="slider-images flex transition-transform duration-500">
                <img src="/images/croissant.jpg" alt="Image 1" class="w-full h-full object-cover flex-shrink-0">
                <img src="/images/sourdoughfix.jpg" alt="Image 2" class="w-full h-full object-cover flex-shrink-0">
                <img src="/images/danish.jpg" alt="Image 3" class="w-full h-full object-cover flex-shrink-0">
            </div>
        </div>
    </div>
    <div class="md:w-1/2 space-y-4 slide-in">
        <h3 class="text-3xl font-semibold text-[#B09076] hover:text-[#D17B88] transition-colors">Premium Selection</h3>
        <p class="text-[#8A6F5A] text-lg leading-relaxed">
            Discover our exquisite range of artisanal breads and pastries:
        </p>
        <ul class="space-y-3 text-[#8A6F5A]">
            <li class="flex items-center gap-2 hover:translate-x-2 transition-transform cursor-pointer">
                <span class="w-2 h-2 bg-[#D17B88] rounded-full"></span>
                French Croissants - Buttery & Flaky
            </li>
            <li class="flex items-center gap-2 hover:translate-x-2 transition-transform cursor-pointer">
                <span class="w-2 h-2 bg-[#D17B88] rounded-full"></span>
                Sourdough Bread - Traditional Recipe
            </li>
            <li class="flex items-center gap-2 hover:translate-x-2 transition-transform cursor-pointer">
                <span class="w-2 h-2 bg-[#D17B88] rounded-full"></span>
                Danish Pastries - Fresh Daily
            </li>
        </ul>
    </div>
</div>

<!-- JavaScript to handle auto sliding -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const slider = document.querySelector(".slider-images");
        let index = 0;
        const images = document.querySelectorAll(".slider-images img");
        const totalImages = images.length;

        function slideImages() {
            index = (index + 1) % totalImages; // Loop through images
            const offset = -index * 100; // Shift images to the left
            slider.style.transform = `translateX(${offset}%)`;
        }

        setInterval(slideImages, 3000); // Change image every 3 seconds
    });
</script>

<!-- Optional CSS for smooth transitions -->
<style>
    .slider-container {
        position: relative;
        width: 100%;
        height: 400px;
        overflow: hidden;
    }

    .slider-images {
        display: flex;
        transition: transform 0.5s ease-in-out;
    }

    .slider-images img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>

            <!-- Feature 2: Community Approved -->
            <div class="flex flex-col md:flex-row-reverse items-center gap-8 bg-white rounded-2xl p-8 shadow-lg hover-scale">
                <!-- Image Section -->
                <div class="md:w-1/2 image-zoom rounded-2xl overflow-hidden shadow-xl">
                    <img src="/images/uno-removebg-preview.png" alt="Community Approved" class="w-[60%] h-auto object-cover transition-transform duration-500 mx-auto">
                </div>

                <!-- Text Section -->
                <div class="md:w-1/2 space-y-6 slide-in">
                    <div class="inline-block bg-[#FDE8E8] rounded-full px-6 py-2 text-[#D17B88] font-semibold hover:bg-[#D17B88] hover:text-white transition-all duration-300">
                        Community Favorite
                    </div>
                    <h3 class="text-3xl font-semibold text-[#B09076] hover:text-[#D17B88] transition-colors">Approved by the People</h3>
                    <p class="text-[#8A6F5A] text-lg leading-relaxed">
                        Our baked goods have earned the trust and love of our community. Made with care and attention to detail, each item reflects our commitment to quality and taste.
                    </p>
                    <div class="flex items-center gap-8">
                        <div class="text-center hover:scale-110 transition-transform cursor-pointer">
                            <div class="text-2xl font-bold text-[#D17B88]">100%</div>
                            <div class="text-sm text-[#8A6F5A]">Customer Satisfaction</div>
                        </div>
                        <div class="text-center hover:scale-110 transition-transform cursor-pointer">
                            <div class="text-2xl font-bold text-[#D17B88]">1000+</div>
                            <div class="text-sm text-[#8A6F5A]">Happy Customers</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Feature 3: Our Service -->
            <div class="bg-gradient-to-br from-[#FDE8E8] to-white rounded-2xl p-8 shadow-lg hover-scale">
                <div class="text-center max-w-2xl mx-auto space-y-6">
                    <h3 class="text-3xl font-semibold text-[#B09076] hover:text-[#D17B88] transition-colors">We Serve the Best for You</h3>
                    <p class="text-[#8A6F5A] text-lg leading-relaxed">
                        Every day, we strive to deliver excellence through our craft. Our commitment to quality ingredients and traditional baking methods ensures that you receive nothing but the best.
                    </p>
                    <div class="grid grid-cols-3 gap-6 pt-6">
                        <div class="text-center group cursor-pointer">
                            <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-3 shadow-md group-hover:bg-[#D17B88] transition-colors duration-300">
                                <svg class="w-8 h-8 text-[#D17B88] group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                </svg>
                            </div>
                            <div class="text-[#B09076] font-semibold group-hover:text-[#D17B88] transition-colors">Premium Quality</div>
                        </div>
                        <div class="text-center group cursor-pointer">
                            <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-3 shadow-md group-hover:bg-[#D17B88] transition-colors duration-300">
                                <svg class="w-8 h-8 text-[#D17B88] group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="text-[#B09076] font-semibold group-hover:text-[#D17B88] transition-colors">Fresh Daily</div>
                        </div>
                        <div class="text-center group cursor-pointer">
                            <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-3 shadow-md group-hover:bg-[#D17B88] transition-colors duration-300">
                                <svg class="w-8 h-8 text-[#D17B88] group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </div>
                            <div class="text-[#B09076] font-semibold group-hover:text-[#D17B88] transition-colors">Made with Love</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Add this script at the end of the body -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Intersection Observer for fade-in elements
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, {
        threshold: 0.1
    });

    // Observe all fade-in elements
    document.querySelectorAll('.fade-in').forEach((el) => observer.observe(el));
});
</script>

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
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>