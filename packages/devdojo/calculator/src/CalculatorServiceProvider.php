<?php

namespace Devdojo\Calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
        
        // from -> to, de: para:
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/Devdojo'),
        ],'calculator');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // this one works as well
        // include __DIR__.'/routes.php';
        
        // register our controller
        $this->app->make('Devdojo\Calculator\CalculatorController');

        $this->loadViewsFrom(__DIR__.'/views', 'calculator');



    }
}
