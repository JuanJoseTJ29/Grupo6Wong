<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        //Ola :) esta es una prueba de la primera parte de la codificacion de Service Home Store :)
        // Juanjo nuestro lider ;P
        
        Schema::defaultStringLength(191);
    }
}
