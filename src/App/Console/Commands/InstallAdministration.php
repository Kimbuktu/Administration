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
        //Spatie.be Permission Installation
        Artisan::call('vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"');
        Artisan::call('vendor:publish --provider="Kimbuktu\Administration\App\Provider\AdministrationServiceProvider"');
        Artisan::call('optimize:clear');
        Artisan::call('config:clear');
        Artisan::call('breeze:install');
        Artisan::call('migrate:fresh --seed');
        return 0;
    }
}
