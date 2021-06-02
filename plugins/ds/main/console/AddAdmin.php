<?php

namespace DS\Main\Console;

use Illuminate\Database\Eloquent\Model;
use Backend\Database\Seeds\SeedSetupAdmin;
use Illuminate\Console\Command;

class AddAdmin extends Command
{
    /**
     * @var string The console command name.
     */
    protected $name = 'ds:addadmin';

    /**
     * @var string The console command description.
     */
    protected $description = 'Add new admin';

    /**
     * Execute the console command.
     * @return void
     */
    public function handle()
    {
        $this->setupAdminUser();

        Model::unguarded(function() {
            $seedSetupAdmin = new SeedSetupAdmin();
            $seedSetupAdmin->run();
        });
    }

    /**
     * Setup Admin user
     */
    protected function setupAdminUser()
    {
        $this->line('Enter a new value, or press ENTER for the default');

        SeedSetupAdmin::$firstName = $this->ask('First Name', SeedSetupAdmin::$firstName);
        SeedSetupAdmin::$lastName = $this->ask('Last Name', SeedSetupAdmin::$lastName);
        SeedSetupAdmin::$email = $this->ask('Email Address', SeedSetupAdmin::$email);
        SeedSetupAdmin::$login = $this->ask('Admin Login', SeedSetupAdmin::$login);
        SeedSetupAdmin::$password = $this->ask('Admin Password', SeedSetupAdmin::$password);

        if (! $this->confirm('Is the information correct?', true))
            $this->setupAdminUser();
    }
}
