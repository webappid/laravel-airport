<?php
/**
 * Created by PhpStorm.
 * User: dyangalih
 * Date: 2019-02-14
 * Time: 02:03
 */

namespace WebAppId\Airport;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function register()
    {
        $this->commands(\WebAppId\Airport\Commands\SeedCommand::class);
    }
    public function boot()
    {
        if ($this->isLaravel53AndUp()) {
            $this->loadMigrationsFrom(__DIR__ . '/migrations');
        } else {
            $this->publishes([
                __DIR__ . '/migrations' => $this->app->databasePath() . '/migrations'
            ], 'migrations');
        }
    }
    protected function isLaravel53AndUp()
    {
        return version_compare($this->app->version(), '5.3.0', '>=');
    }
}