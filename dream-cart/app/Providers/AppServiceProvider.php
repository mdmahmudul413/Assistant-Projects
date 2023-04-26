<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Wishlist;
use Illuminate\Support\ServiceProvider;
use View;

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
        View::composer('*', function ($view){
            $view->with('categories', Category::where('status', 1)->get());
        });
        View::composer('*', function ($view){
            $view->with('wishlist_Products', Wishlist::where('user_id', session('customer_id'))->where('status', 1)->get());
        });
    }
}
