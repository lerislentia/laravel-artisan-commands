<?php

namespace Lerislentia\ArtisanCommands;

use Illuminate\Support\ServiceProvider;

class ArtisanCommandsServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                Console\Custom\ServiceMakeCommand::class,
                Console\Custom\RepositoryMakeCommand::class,
            ]);
        }
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}