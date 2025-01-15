<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;


// Route untuk login
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

// Route untuk logout
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Route halaman utama (default)
Route::get('/', function () {
    return view('welcome');
});

// Route untuk halaman statis lainnya
Route::get('/about', function () {
    return view('about');
});

// Route untuk dashboard umum (hanya untuk pengguna yang terverifikasi)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route untuk shop (produk berdasarkan kategori)
// Route::get('/shop/{category}', [ShopController::class, 'show'])->name('shop.show');

// Route untuk admin (dengan prefix dan middleware auth)
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('/products', ProductController::class);
});

// Route::get('/shop', function () {
//     return redirect('/shop/Cake');
// })->name('shop.index');

// Route::get('/shop/{category}', [ShopController::class, 'show'])->name('shop.show');

// Route::resource('/categories', CategoryController::class);
Route::get('/shop', function () {
    return redirect('/shop/Cake');
})->name('shop.index');

Route::get('/shop/{category}', [ShopController::class, 'show'])->name('shop.show');

// Route untuk profil pengguna
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Sertakan file auth.php untuk route otentikasi (default route dari Laravel Breeze/Jetstream)
require __DIR__ . '/auth.php';
