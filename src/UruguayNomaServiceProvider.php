<?php

namespace ACdev\UruguayNoma;

use ACdev\UruguayNoma\Commands\UruguayNomaCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class UruguayNomaServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('uruguay-noma')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_uruguay-noma_table')
            ->hasCommand(UruguayNomaCommand::class);
    }

    public function packageBooted()
    {
        $this->publishes([
            __DIR__.'/../storage/app' => base_path('storage/app'),
        ], 'uruguay-noma-csv');
    }
}
