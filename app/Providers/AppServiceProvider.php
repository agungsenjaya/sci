<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Kategori;
use App\Brand;
use App\Product;
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
        View::composer(['layouts.modal','layouts.header', 'layouts.footer','home'], function ($view) {
            $view->with('kategori', Kategori::all())->with('brands', Brand::all())->with('products', Product::all());
        });
    }
}
