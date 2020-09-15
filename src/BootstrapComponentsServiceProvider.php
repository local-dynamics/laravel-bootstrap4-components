<?php

namespace LocalDynamics\Bootstrap4Components;

use Appstract\BladeDirectives\BladeDirectivesServiceProvider;
use Illuminate\Support\ServiceProvider;

class BootstrapComponentsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        require_once __DIR__ . '/functions.php';

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'bsComp');

        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__ . '/../resources/views' => resource_path('views/vendor/bsComp')], 'views');
        }
    }

    public function register()
    {
      //  $this->app->register(BladeDirectivesServiceProvider::class);
    }
}
