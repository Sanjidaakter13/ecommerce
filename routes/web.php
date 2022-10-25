<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\HomeController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;

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

//ADMIN Route
//For Main
Route::get('/admin',[DashboardController::class,'view']);

//Dashboard
Route::get('/dashboard1/view',[DashboardController::class,'dashboard_view'])->name('dashboard-view');

//Product
Route::get('/product/list',[ProductController::class,'product_list'])->name('product.list');
Route::get('/product/create',[ProductController::class,'product_create'])->name('product.create');
Route::post('/product/store',[ProductController::class,'product_store'])->name('product.store');



//Category
Route::get('/category/list',[CategoryController::class,'category_list'])->name('category.list');
Route::get('/category/create',[CategoryController::class,'category_create'])->name('category.create');
Route::post('/category/store',[CategoryController::class,'category_store'])->name('category.store');
Route::get('/category/delete/{id}',[CategoryController::class,'category_delete'])->name('category.delete');
Route::get('/category/view/{id}',[CategoryController::class,'category_view'])->name('category.view');
Route::get('/category/edit/{id}',[CategoryController::class,'category_edit'])->name('category.edit');
Route::post('/category/update/{id}',[CategoryController::class,'category_update'])->name('category.update');


//Frontend
Route::get('/',[HomeController::class,'home_view'])->name('home');
Route::get('/shop/view',[HomeController::class,'shop_view'])->name('shop.view');
Route::get('/shop/detail/view',[HomeController::class,'shopdetail_view'])->name('shopdetail.view');
Route::get('/shopping/cart/view',[HomeController::class,'shopping_cart_view'])->name('shoppingcart.view');
Route::get('/checkout/view',[HomeController::class,'checkout_view'])->name('checkout.view');
Route::get('/contact/view',[HomeController::class,'contact_view'])->name('contact.view');




