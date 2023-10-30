<?php

namespace App\Providers;

use App\Models\Order;
use Illuminate\Support\ServiceProvider;
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
        view()->composer('components.layouts.header', function ($view) {
            $orderId = session('orderId');
            $order = Order::find($orderId);
            $totalProductCount = $order ? $order->getTotalProductCount() : 0;

            $view->with('totalProductCount', $totalProductCount);
        });

        view()->composer('site.pages.cart.index', function ($view) {
            $orderId = session('orderId');
            $order = Order::find($orderId);
            $totalProductCount = $order ? $order->getTotalProductCount() : 0;

            $view->with('totalProductCount', $totalProductCount);
        });
    }
}
