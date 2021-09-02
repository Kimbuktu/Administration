<?php

namespace Kimbuktu\Administration\App\Console\Commands;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Console\Command;

class InstallAdministration extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'administration:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install\'s everything needed for the Administration to run. Authentications, Migrations, Seeding. Publishes all required config files and resources.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $prefix = "[Administration]: ";

        Artisan::call('vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"');
        $this->info($prefix . "Published required files tagged by PermissionServiceProvider of package spatie/laravel-permission");

        Artisan::call('vendor:publish --provider="Kimbuktu\Administration\App\Provider\AdministrationServiceProvider"');
        $this->info($prefix . "Published required files tagged by AdministrationServiceProvider of package kimbuktu/administration");

        Artisan::call('optimize:clear');
        Artisan::call('config:clear');
        $this->info($prefix . "Cache and config cleared");
        
        return 0;
    }
}