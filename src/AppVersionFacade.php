<?php

namespace Butochnikov\LaravelAppVersion;

use Illuminate\Support\Facades\Facade;

class AppVersionFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'app-version';
    }
}
