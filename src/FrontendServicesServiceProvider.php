<?php

namespace LiranCo\FrontendServices;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class FrontendServicesServiceProvider extends ServiceProvider
{
    
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'services');
        
        Blade::componentNamespace('LiranCo\\FrontendServices\\View\\Components', 'services');
    }
}
