<?php

namespace Binlq0\LaravelAdminLte\Console;

use Illuminate\Console\Command;

class InstallAdminLte extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'adminlte:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install AdminLTE Assets to this project';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Installing Laravel-AdminLTE...');

        $this->info('Publishing configuration...');

        $this->publishConfiguration();

        $this->info('Installed Laravel-AdminLTE');
    }

    private function publishConfiguration()
    {
        $params = [
            '--provider' => "Binlq0\LaravelAdminLte\AdminLteServiceProvider",
            '--tag' => "adminlte",
            '--force' => ""
        ];

        $this->call('vendor:publish', $params);
    }
}
