<?php

namespace Ibnudirsan\LaraAssets;

use Illuminate\Support\ServiceProvider;

class FolderServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Ibnudirsan\LaraAssets\Commands', function($app) {
            return $app['Ibnudirsan\LaraAssets\Commands\AssetFolder'];
        });
        $this->commands('Ibnudirsan\LaraAssets\Commands');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}