<?php

namespace Kimbuktu\Administration\App\Providers;

use Illuminate\Support\ServiceProvider;

class AdministrationServiceProvider extends ServiceProvider
{

    static $key = "administration";
    static $src = __DIR__.'/../../';

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishResources();
        }

        $this->loadRoutesFrom(self::$src . 'routes/web.php');
        $this->loadMigrationsFrom(self::$src . 'database/migrations');
        $this->loadTranslationsFrom(self::$src . 'resources/lang', self::$key);

        Artisan::call('breeze:install');
        Artisan::call('migrate:fresh --seed');
    }

    public function register(){
        $this->mergeConfigFrom(self::$src . 'Config/administration.php', self::$key);
    }

    protected function publishResources(){
        $this->publishes([self::$src . 'config/administration.php' => config_path('administration.php')], self::$key . '-config');
        $this->publishes([self::$src . 'database/seeders/AdministrationSeeder.php' => database_path('seeders/AdministrationSeeder.php')], self::$key . '-seeder');
    }

}