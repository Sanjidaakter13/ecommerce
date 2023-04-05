<?php
    
use Illuminate\Support\Facades\Route;

//Frontend
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\Frontend\OrderController;
use App\Http\Controllers\Frontend\OrderdetailController;
use App\Http\Controllers\Frontend\CustomerController as FrontendCustomer;


 //Backend   
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\controllers\Backend\RoleController;
use App\Http\controllers\Backend\PermissionController;
use App\Http\controllers\Backend\UserController;


    
    
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
    
    //subcategory
    Route::get('/subcategory/list',[SubCategoryController::class,'subcategory_list'])->name('subcategory.list');
    Route::get('/subcategory/create',[SubCategoryController::class,'subcategory_create'])->name('subcategory.create');
    Route::post('/subcategory/store',[SubCategoryController::class,'subcategory_store'])->name('subcategory.store');
    //Customer
    Route::get('/customer/list',[CustomerController::class,'customer_list'])->name('customer.list');
    Route::get('/customer/delete/{id}',[CustomerController::class,'customer_delete'])->name('customer.delete');
    Route::get('/customer/view/{id}',[CustomerController::class,'customer_view'])->name('customer.view');
    Route::get('/customer/edit/{id}',[CustomerController::class,'customer_edit'])->name('customer.edit');
    Route::post('/customer/update/{id}',[CustomerController::class,'customer_update'])->name('customer.update');
    
    //Role
    Route::get('/role',[RoleController::class,'role_list'])->name('role.list');
    Route::get('/role/create',[RoleController::class,'role_create'])->name('role.create');
    Route::post('/role/store',[RoleController::class,'role_store'])->name('role.store');
    Route::get('/role/view{id}',[RoleController::class,'role_view'])->name('role.view');
    Route::get('/role/edit{id}',[RoleController::class,'role_edit'])->name('role.edit');
    Route::post('/role/update{id}',[RoleController::class,'role_update'])->name('role.update');
    Route::get('/role/delete{id}',[RoleController::class,'role_delete'])->name('role.delete');
    Route::get('/role/assign{id}',[RoleController::class,'role_assignlist'])->name('role.assign.list');
    
    //permission 
    Route::get('/permission',[PermissionController::class,'permission_list'])->name('permission.list');
    Route::post('/permissions-assign/{id}',[PermissionController::class,'assignPermissions'])->name('permissions.assign');

    //user
    Route::get('/user',[UserController::class,'user_list'])->name('user.list');
    Route::get('/user/create',[UserController::class,'user_create'])->name('user.create');
    Route::post('/user/store',[UserController::class,'user_store'])->name('user.store');
});


//Frontend Routes
//localization
Route::group(['middleware'=>'localization'],function (){
Route::get('/switch-lang/{lang}', [HomeController::class, 'changeLanguage'])->name('switch.lang');

//Pages view
Route::get('/',[HomeController::class,'home_view'])->name('home');
Route::get('/shop/view',[HomeController::class,'shop_view'])->name('shop.view');
Route::get('/shop/detail/view',[HomeController::class,'shopdetail_view'])->name('shopdetail.view');
Route::get('/checkout/view',[HomeController::class,'checkout_view'])->name('checkout.view');
Route::get('/contact/view',[HomeController::class,'contact_view'])->name('contact.view');
Route::get('/product/view/{id}',[HomeController::class,'product_view'])->name('product.view');
});
//Customer

//Order
Route::get('/order/list',[OrderController::class,'order_list'])->name('order-list');

//Order-details
Route::get('orderdetails/list',[OrderdetailController::class,'orderdetail_list'])->name('orderdetail.list');

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
