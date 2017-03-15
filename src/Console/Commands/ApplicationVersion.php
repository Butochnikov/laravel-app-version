<?php

namespace Butochnikov\LaravelAppVersion\Console\Commands;

use Illuminate\Console\Command;
use Butochnikov\LaravelAppVersion\AppVersion;

class ApplicationVersion extends Command
{
    protected $signature = 'app:ver 
                            {--F|full : With framework version}';

    protected $description = 'Display application version';

    public function handle(AppVersion $ver)
    {
        $options = $this->options();

        if ($options['full']) {
            $this->info($ver->getFullVersion());
        } else {
            $this->info($ver);
        }
    }
}
