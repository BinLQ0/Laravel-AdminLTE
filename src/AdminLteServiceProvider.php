<?php

namespace Binlq0\LaravelAdminLte;

use Binlq0\LaravelAdminLte\Components\Forms\Button;
use Binlq0\LaravelAdminLte\Components\Forms\Date;
use Binlq0\LaravelAdminLte\Components\Forms\Input;
use Binlq0\LaravelAdminLte\Components\Forms\Select;
use Binlq0\LaravelAdminLte\Components\Layouts\SidebarMenu;
use Binlq0\LaravelAdminLte\Console\InstallAdminLte;
use Illuminate\Support\ServiceProvider;

class AdminLteServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    private static $SOURCE_NAME = 'adminlte';

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->setupConfig();
        $this->setupRoutes();
        $this->setupViews();
        $this->setupComponentViews();

        // Register the command if we are using the application via the CLI
        if ($this->app->runningInConsole()) {
            $this->setupConsole();
            $this->ExportAssets();
        }
    }

    /**
     * Setup Config File
     */
    private function setupConfig()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', self::$SOURCE_NAME);
    }

    /**
     * Setup Routes
     */
    private function setupRoutes()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }

    /**
     * Setup Views
     */
    private function setupViews()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', self::$SOURCE_NAME);
    }

    /**
     * Setup Component Views
     */
    private function setupComponentViews()
    {
        $this->loadViewComponentsAs(self::$SOURCE_NAME, [
            'button'         => Button::class,
            'date'           => Date::class,
            'input'          => Input::class,
            'select'         => Select::class,
            'sidebar-menu'   => SidebarMenu::class
        ]);
    }

    /**
     * Setup Console Artisan
     */
    private function setupConsole()
    {
        $this->commands([
            InstallAdminLte::class
        ]);
    }

    /**
     * Export Assets
     */
    private function ExportAssets()
    {
        $this->publishes([

            // AdminLTE JS Core

            base_path('vendor/almasaeed2010/adminlte/dist/js/adminlte.min.js')          => public_path('/adminlte/js/adminlte.min.js'),
            base_path('vendor/almasaeed2010/adminlte/dist/js/adminlte.min.js.map')      => public_path('/adminlte/js/adminlte.min.js.map'),

            // AdminLTE CSS Core

            base_path('vendor/almasaeed2010/adminlte/dist/css/adminlte.min.css')        => public_path('/adminlte/css/adminlte.min.css'),
            base_path('vendor/almasaeed2010/adminlte/dist/css/adminlte.min.css.map')    => public_path('/adminlte/css/adminlte.min.css.map'),

            // AdminLTE Plugin

            base_path('vendor/almasaeed2010/adminlte/plugins/bootstrap')            => public_path('/plugins/bootstrap'),
            base_path('vendor/almasaeed2010/adminlte/plugins/datatables')           => public_path('/plugins/datatables'),
            base_path('vendor/almasaeed2010/adminlte/plugins/datatables-bs4')       => public_path('/plugins/datatables-bs4'),
            base_path('vendor/almasaeed2010/adminlte/plugins/daterangepicker')      => public_path('/plugins/daterangepicker'),
            base_path('vendor/almasaeed2010/adminlte/plugins/fontawesome-free')     => public_path('/plugins/fontawesome-free'),
            base_path('vendor/almasaeed2010/adminlte/plugins/icheck-bootstrap')     => public_path('/plugins/icheck-bootstrap'),
            base_path('vendor/almasaeed2010/adminlte/plugins/jquery')               => public_path('/plugins/jquery'),
            base_path('vendor/almasaeed2010/adminlte/plugins/jquery-ui')            => public_path('/plugins/jquery-ui'),
            base_path('vendor/almasaeed2010/adminlte/plugins/moment')               => public_path('/plugins/moment'),
            base_path('vendor/almasaeed2010/adminlte/plugins/select2')              => public_path('/plugins/select2'),

            // Compose View
            __DIR__ . '/../src/Http/View/Composers'                                   => app_path('Http/View/Composers'),

        ], 'assets');

        $this->publishes([
            __DIR__ . '/../config/config.php' => config_path(self::$SOURCE_NAME . '.php'),
        ], 'config');
    }
}
