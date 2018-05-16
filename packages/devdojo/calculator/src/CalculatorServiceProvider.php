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
