<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;
Use Illuminate\Pagination\Paginator;

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
        // korristi bootstrap 5
        Paginator::useBootstrapFive(); 
        
        view()->composer('layouts.app', function ($view)
        {
            $view->with('currentLocale',App::currentLocale()); // saljemo parametar sa withom
        }); // Composer prosledjujemo nesto saljemo putanju do blade fajla sta prosledjjemo
    }
}
