<?php
namespace Corazzi\LaravelDebugSwitch\Providers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;

class LaravelDebugSwitchServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the service provider
     */
    public function boot() : void
    {
        $this->publishes([
            __DIR__.'/../resources/config/debug-switch.php' => config_path('debug-switch.php')
        ]);

        $this->loadRoutesFrom(__DIR__.'/../Http/routes.php');
    }
}