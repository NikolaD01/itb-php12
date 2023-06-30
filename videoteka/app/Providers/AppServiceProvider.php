<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;

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
        view()->composer('layouts.app', function ($view)
        {
            $view->with('currentLoc',App::currentLocale()); // saljemo parametar sa withom
        }); // Composer prosledjujemo nesto saljemo putanju do blade fajla sta prosledjjemo
    }
}
