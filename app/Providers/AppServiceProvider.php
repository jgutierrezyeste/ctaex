<?php

namespace App\Providers;

use App\Models\Menu;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();

      
        
        view()->composer('welcome_menu',function($view)
        {
            $view->with('menus',Menu::menus());
        });
    }
}
