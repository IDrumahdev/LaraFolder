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
        $this->app->singleton('ibnudirsan.LaraAssets.commands', function($app) {
            return $app['Ibnudirsan\LaraAssets\Commands\LaraAssets'];
        });
        $this->commands('ibnudirsan.LaraAssets.commands');
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