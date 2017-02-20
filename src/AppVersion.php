<?php

namespace Butochnikov\LaravelAppVersion;

use Illuminate\Support\Facades\Config;

class AppVersion
{
    public $ver;

    public function __construct()
    {
        $this->ver = $this->getVersion();
    }

    private static function versionFile()
    {
        return base_path().'/.version';
    }

    public function getAppName()
    {
        return $app_name = Config('app.name');
    }

    public function getVersion()
    {
        if ($this->getAppName() == 'Laravel') {
            return app()->version();
        }

        if (file_exists(self::versionFile())) {
            $file_content = trim(file_get_contents(self::versionFile()));
            if ($file_content == false) {
                return '<error>no version</error>';
            } else {
                return $file_content;
            }
        } else {
            return '<error>no file version</error>';
        }
    }

    public function setVersion()
    {
        //todo: create method
    }

    private function printVersion($full = false)
    {
        if ($full) {
            return "{$this->getAppName()} {$this->ver} <comment>(Laravel ".app()->version().')</comment>';
        } else {
            return "{$this->getAppName()} {$this->ver}";
        }
    }

    public function getAppVersion()
    {
        return $this->printVersion();
    }

    public function getFullVersion()
    {
        return $this->printVersion(true);
    }

    public function __toString()
    {
        return $this->printVersion();
    }
}
