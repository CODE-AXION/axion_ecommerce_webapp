<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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
Route::get('/shop', [ProductController::class, 'shop_index'])->name('shop.index');
Route::get('/cart', [ProductController::class, 'cart_index'])->name('product.cart');
Route::get('/products/{sku}/{slug}', [ProductController::class, 'show_product_details'])->name('product.show');


require __DIR__.'/auth.php';
