<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
Use App\Models\Category;
use App\Models\Product;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        $categories=Category::all();
        View::share('categories', $categories);

        $products=Product::all();
        View::share('products',$products);
        //view::share('key', variable) same name hobe
    }
}
