<?php

namespace Abr4xas\UruguayNoma;

use Illuminate\Support\ServiceProvider;
use Abr4xas\UruguayNoma\Commands\UruguayNomaCommand;

class UruguayNomaServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {

            $this->publishes([
                __DIR__.'/../storage/app' => base_path('storage/app'),
            ], 'csv');

            if (! class_exists('CreatePackageTable')) {
                $this->publishes([
                    __DIR__ . '/../database/migrations/create_uruguay_noma_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_uruguay_noma_table.php'),
                ], 'migrations');
            }

            $this->commands([
                UruguayNomaCommand::class,
            ]);
        }

    }

    public function register()
    {
		//
    }
}
