<?php

namespace LocalDynamics\Bootstrap4Components;

use Appstract\BladeDirectives\BladeDirectivesServiceProvider;
use Illuminate\Support\ServiceProvider;
use View;

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

        $tabHelper = new class { public $active = true; };
        View::composer('bsComp::tabs', function (View $view) use ($tabHelper) {
            $view->with('tabHelper', $tabHelper);
        });
        View::composer('bsComp::tab', function (View $view) use ($tabHelper) {
            $view->with('tabHelper', $tabHelper);
        });
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->register(BladeDirectivesServiceProvider::class);
    }
}