<?php

namespace Butochnikov\LaravelAppVersion;

use Illuminate\Support\ServiceProvider;

class AppVersionServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->registerConsoleCommands();
    }

    protected function registerConsoleCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                \Butochnikov\LaravelAppVersion\Console\Commands\ApplicationVersion::class,
            ]);
        }
    }
}
