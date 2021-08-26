<?php

namespace Kimbuktu\Administration\Providers;

use Illuminate\Support\ServiceProvider;

class AdministrationServiceProvider extends ServiceProvider
{

    static $src = __DIR__.'/../../';

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishResources();
        }

        $this->loadRoutesFrom(self::$src . 'routes/web.php');
        $this->loadMigrationsFrom(self::$src . 'database/migrations');
        $this->loadTranslationsFrom(self::$src . 'resources/lang', config('key'));
    }

    public function register(){

    }

    protected function publishResources(){
        $this->publishes([self::$src . 'config/administration.php' => config_path('administration.php')], config('key') . '-config');
        $this->publishes([self::$src . 'database/seeders/AdministrationSeeder.php' => database_path('seeders/AdministrationSeeder.php')], config('key') . '-seeder');
    }
    
}