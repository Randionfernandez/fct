<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
     * @return voidhttps://www.php.net/manual/es/json.constants.php
     */
    public function boot()
    {
        //
        View::share('titulo','El huracán');
    }
}
