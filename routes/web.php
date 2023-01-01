<?php
    
use Illuminate\Support\Facades\Route;
    
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\WishlistController;
    
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\controllers\Backend\CustomerController;
    
use App\Http\Controllers\Frontend\CustomerController as FrontendCustomer;
    
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
    
// Route::get('/', function () {
//     return view('welcome');
// });
    
//ADMIN Routes
Route::get('/admin/login',[DashboardController::class,'login'])->name('login');
Route::post('/admin/dologin',[DashboardController::class,'dologin'])->name('admin-login');
//Group route
Route::Group (["middleware"=>["auth", "admincheck"] , "prefix"=>"admin"], function(){
    
    Route::get('/logout',[DashboardController::class,'admin_logout'])->name('admin-logout');
    
    //Main
    Route::get('/',[DashboardController::class,'view'])->name('dashboard');
    
    //Dashboard
    Route::get('/dashboard1/view',[DashboardController::class,'dashboard_view'])->name('dashboard-view');
    
    //Product
    Route::get('/product/list',[ProductController::class,'product_list'])->name('product.list');
    Route::get('/product/create',[ProductController::class,'product_create'])->name('product.create');
    Route::post('/product/store',[ProductController::class,'product_store'])->name('product.store');
    Route::get('/product/delete/{id}',[ProductController::class,'product_delete'])->name('product.delete');
    
    //Category
    Route::get('/category/list',[CategoryController::class,'category_list'])->name('category.list');
    Route::get('/category/create',[CategoryController::class,'category_create'])->name('category.create');
    Route::post('/category/store',[CategoryController::class,'category_store'])->name('category.store');
    Route::get('/category/delete/{id}',[CategoryController::class,'category_delete'])->name('category.delete');
    Route::get('/category/view/{id}',[CategoryController::class,'category_view'])->name('category.view');
    Route::get('/category/edit/{id}',[CategoryController::class,'category_edit'])->name('category.edit');
    Route::post('/category/update/{id}',[CategoryController::class,'category_update'])->name('category.update');
    
    //Customer
    Route::get('/customer/list',[CustomerController::class,'customer_list'])->name('customer.list');
    Route::get('/customer/delete/{id}',[CustomerController::class,'customer_delete'])->name('customer.delete');
    Route::get('/customer/view/{id}',[CustomerController::class,'customer_view'])->name('customer.view');
    Route::get('/customer/edit/{id}',[CustomerController::class,'customer_edit'])->name('customer.edit');
    Route::post('/customer/update/{id}',[CustomerController::class,'customer_update'])->name('customer.update');
    });


//Frontend Routes

//Pages view
Route::get('/',[HomeController::class,'home_view'])->name('home');
Route::get('/shop/view',[HomeController::class,'shop_view'])->name('shop.view');
Route::get('/shop/detail/view',[HomeController::class,'shopdetail_view'])->name('shopdetail.view');
Route::get('/checkout/view',[HomeController::class,'checkout_view'])->name('checkout.view');
Route::get('/contact/view',[HomeController::class,'contact_view'])->name('contact.view');
Route::get('/product/view/{id}',[HomeController::class,'product_view'])->name('product.view');

//Customer
//Registration
Route::get('/register',[FrontendCustomer::class,'register'])->name('register');
Route::post('/doregistration',[FrontendCustomer::class,'doregistration'])->name('doregistration');

//Login
Route::post('/dologin',[FrontendCustomer::class,'dologin'])->name('dologin');
Route::get('/logout',[FrontendCustomer::class,'logout'])->name('logout');

//search 
Route::get('/search',[FrontendCustomer::class,'search'])->name('search');

//Add to cart
Route::get('/shopping/cart/view',[HomeController::class,'shopping_cart_view'])->name('shoppingcart.view');
Route::get('/addtocart/{id}',[CartController::class,'add_to_cart'])->name('add.to.cart');
Route::get('/clear/cart',[CartController::class,'clear_cart'])->name('clear.cart');
Route::get('/cart/update/{id}',[CartController::class,'update_cart'])->name('update.cart');
Route::get('cart/delete/{id}',[CartController::class,'delete_cart'])->name('delete.cart');

//Wishlist
Route::get('/wishlist/view',[WishlistController::class,'wishlist_view'])->name('wishlist.view');
Route::get('/wishlist/{id}',[WishlistController::class,'wishlist'])->name('wishlist');
Route::get('/wishlist/delete/{id}',[WishlistController::class,'delete_wishlist'])->name('delete.wishlist');
Route::get('/wishlist-clear',[WishlistController::class,'wishlist_clear'])->name('wishlist.clear');