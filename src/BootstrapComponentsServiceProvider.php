<?php

namespace LocalDynamics\Bootstrap4Components;

use Appstract\BladeDirectives\BladeDirectivesServiceProvider;
use Illuminate\Support\ServiceProvider;

class BootstrapComponentsServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'bsComp');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../resources/views' => resource_path('views/vendor/bsComp'),
            ], 'views');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->register(BladeDirectivesServiceProvider::class);
    }
}