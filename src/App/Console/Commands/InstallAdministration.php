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
        Artisan::call('vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"');
        $this->info("Published from PermissionServiceProvider");

        Artisan::call('vendor:publish --provider="Kimbuktu\Administration\App\Provider\AdministrationServiceProvider"');
        $this->info("Published from AdministrationServiceProvider");

        Artisan::call('optimize:clear');
        Artisan::call('config:clear');
        $this->info("Optimized Clean");

        Artisan::call('breeze:install');
        $this->info("Breeze installed.");

        Artisan::call('migrate:fresh --seed');
        $this->info("Migrating fresh");

        exec("npm install");
        $this->info("Npm requirements installed");

        exec("npm run dev");
        $this->info("Npm compiler run successfull");
        
        return 0;
    }
}