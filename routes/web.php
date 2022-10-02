<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/',[DashboardController::class,'view']);

//Dashboard
Route::get('/dashboard1/view',[DashboardController::class,'dashboard_view'])->name('dashboard-view');

//Product
Route::get('/product/list',[ProductController::class,'product_list'])->name('product.list');
Route::get('/product/create',[ProductController::class,'product_create'])->name('product.create');
Route::post('/product/store',[ProductController::class,'product_store'])->name('product.store');
Route::get('/product/delete/{id}',[ProductController::class,'product_delete'])->name('product.delete');
Route::get('/product/create',[ProductController::class,'product_create'])->name('product.create');
Route::get('/product/create',[ProductController::class,'product_create'])->name('product.create');



//Category
Route::get('/category/list',[CategoryController::class,'category_list'])->name('category.list');
Route::get('/category/create',[CategoryController::class,'category_create'])->name('category.create');
Route::post('/category/store',[CategoryController::class,'category_store'])->name('category.store');


