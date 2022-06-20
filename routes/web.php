<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

use App\Http\Livewire\Products\ShopComponent;
use App\Http\Livewire\Products\CategoryComponent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
    
})->middleware(['auth'])->name('dashboard');


// Route::view('home','/home');

//HOME PAGE VIEWS

Route::get('/home', [ProductController::class, 'home']);
// Route::get('/shop', [ProductController::class, 'shop_index'])->name('shop.index');
Route::get('/cart', [ProductController::class, 'cart_index'])->name('product.cart');
Route::get('/products/{id}/{slug}', [ProductController::class, 'show_product_details'])->name('product.show');

//Public Categories Routes

// Route::get('/product-category/{category_slug}', [CategoryController::class, 'home_show'])->name('public_Category.show');

Route::get('/shop', ShopComponent::class)->name('shop.index');
Route::get('/shop/{category_slug}/{category_id}', ShopComponent::class)->name('shop.name');

Route::get('/product-category/{category_slug}', CategoryComponent::class)->name('category.index');

// Route::get('/product-category/{category_slug}', [ProductCategories::class])->name('public_Category.show');
// Route::get('/product-category/{category_slug}', ProductCategories::class)->name('publicategory.show');

require __DIR__.'/auth.php';
