<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DreamCartController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\HomeSliderController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\HomeCategoryController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\WishlistController;

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

Route::get('/', [DreamCartController::class, 'index'])->name('home');
Route::get('/product-category/{id}', [DreamCartController::class, 'category'])->name('category');
Route::get('/product-sub-category/{id}', [DreamCartController::class, 'subCategory'])->name('sub-category');
Route::get('/product-detail/{id}', [DreamCartController::class, 'detail'])->name('detail');
Route::get('/product-shop', [DreamCartController::class, 'shop'])->name('shop');
Route::post('/cart-add/{id}', [CartController::class, 'index'])->name('cart');
Route::post('/cart/update-item/{id}', [CartController::class, 'update'])->name('cart.update');
Route::get('/cart/show-item', [CartController::class, 'show'])->name('cart.show');
Route::get('/cart/remove-item/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/new-order', [CheckoutController::class, 'newOrder'])->name('new.order');
Route::get('/complete-order', [CheckoutController::class, 'completeOrder'])->name('complete.order');
Route::get('/products/on-sale', [DreamCartController::class, 'onSale'])->name('on.sale.products');

Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::get('/customer/login', [CustomerAuthController::class, 'login'])->name('customer.login')->middleware('dashboard');
Route::post('/customer/login', [CustomerAuthController::class, 'newLogin'])->name('customer.login');
Route::get('/customer/logout', [CustomerAuthController::class, 'logOut'])->name('customer.logout');
Route::post('/customer/register', [CustomerAuthController::class, 'newCustomer'])->name('customer.register');

Route::post('/wishlist/add', [WishlistController::class, 'add'])->name('wishlist.add');

Route::middleware(['customer'])->group(function (){
    Route::get('/customer/dashboard', [CustomerAuthController::class, 'dashboard'])->name('customer.dashboard');
    Route::get('/customer/wishlist', [WishlistController::class, 'index'])->name('customer.wishlist');

});

//Ajax route
Route::get('/customer-email-check', [CustomerAuthController::class, 'customerEmailCheck'])->name('customer.email.check');

// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/category/add', [CategoryController::class, 'index'])->name('category.add');
    Route::post('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::get('/category/manage', [CategoryController::class, 'manage'])->name('category.manage');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');

    Route::get('/sub-category/add', [SubCategoryController::class, 'index'])->name('sub-category.add');
    Route::post('/sub-category/create', [SubCategoryController::class, 'create'])->name('sub-category.create');
    Route::get('/sub-category/manage', [SubCategoryController::class, 'manage'])->name('sub-category.manage');
    Route::get('/sub-category/edit/{id}', [SubCategoryController::class, 'edit'])->name('sub-category.edit');
    Route::post('/sub-category/update/{id}', [SubCategoryController::class, 'update'])->name('sub-category.update');
    Route::get('/sub-category/delete/{id}', [SubCategoryController::class, 'delete'])->name('sub-category.delete');

    Route::get('/brand/add', [BrandController::class, 'index'])->name('brand.add');
    Route::post('/brand/create', [BrandController::class, 'create'])->name('brand.create');
    Route::get('/brand/manage', [BrandController::class, 'manage'])->name('brand.manage');
    Route::get('/brand/edit/{id}', [BrandController::class, 'edit'])->name('brand.edit');
    Route::post('/brand/update/{id}', [BrandController::class, 'update'])->name('brand.update');
    Route::get('/brand/delete/{id}', [BrandController::class, 'delete'])->name('brand.delete');

    Route::get('/unit/add', [UnitController::class, 'index'])->name('unit.add');
    Route::post('/unit/create', [UnitController::class, 'create'])->name('unit.create');
    Route::get('/unit/manage', [UnitController::class, 'manage'])->name('unit.manage');
    Route::get('/unit/edit/{id}', [UnitController::class, 'edit'])->name('unit.edit');
    Route::post('/unit/update/{id}', [UnitController::class, 'update'])->name('unit.update');
    Route::get('/unit/delete/{id}', [UnitController::class, 'delete'])->name('unit.delete');

    Route::get('/product/add', [ProductController::class, 'index'])->name('product.add');
    Route::post('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::get('/product/manage', [ProductController::class, 'manage'])->name('product.manage');
    Route::get('/product/detail/{id}', [ProductController::class, 'detail'])->name('product.detail');
    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');

    Route::get('/admin/order-manage', [AdminOrderController::class, 'manage'])->name('admin.order-manage');
    Route::get('/admin/order-detail/{id}', [AdminOrderController::class, 'detail'])->name('admin.order-detail');
    Route::get('/admin/order-invoice/{id}', [AdminOrderController::class, 'invoice'])->name('admin.order-invoice');
    Route::get('/admin/order-print/{id}', [AdminOrderController::class, 'printInvoice'])->name('admin.print-invoice');
    Route::get('/admin/order-edit/{id}', [AdminOrderController::class, 'edit'])->name('admin.order-edit');
    Route::post('/admin/order-update/{id}', [AdminOrderController::class, 'update'])->name('admin.order-update');
    Route::get('/admin/order-delete/{id}', [AdminOrderController::class, 'delete'])->name('admin.order-delete');

    Route::middleware(['userModule'])->group(function (){
        Route::get('/user/add', [UserController::class, 'index'])->name('user.add');
        Route::post('/user/create', [UserController::class, 'create'])->name('user.create');
        Route::get('/user/manage', [UserController::class, 'manage'])->name('user.manage');
        Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
        Route::post('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
        Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
    });

    Route::get('/user/profile', [ProfileController::class, 'index'])->name('user.profile');

    Route::get('/slider/add', [HomeSliderController::class, 'index'])->name('slider.add');
    Route::post('/slider/create', [HomeSliderController::class, 'create'])->name('slider.create');
    Route::get('/slider/manage', [HomeSliderController::class, 'manage'])->name('slider.manage');
    Route::get('/slider/edit/{id}', [HomeSliderController::class, 'edit'])->name('slider.edit');
    Route::post('/slider/update/{id}', [HomeSliderController::class, 'update'])->name('slider.update');
    Route::get('/slider/delete/{id}', [HomeSliderController::class, 'delete'])->name('slider.delete');

    Route::get('/admin/home-categories/manage', [HomeCategoryController::class, 'manage'])->name('home.categories.manage');
    Route::post('/admin/home-categories/update', [HomeCategoryController::class, 'update'])->name('home.categories.update');

    Route::get('/admin/sale', [SaleController::class, 'index'])->name('admin.sale');
    Route::post('/admin/update/sale-timer', [SaleController::class, 'update'])->name('admin.update.sale');

});
