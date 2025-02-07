<?php
namespace Custom\Customer;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use Custom\Student\Livewire\CustomerIndex;
use Custom\Student\Livewire\CustomerCreate;

class CustomerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/config/customer.php', 'customer');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Livewire::component('customer-index', CustomerIndex::class);
        Livewire::component('customer-create', CustomerCreate::class);

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'customer');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/config/customer.php' => config_path('customer.php'),
            ], 'config');
            
            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/customer'),
            ], 'views');
            
            $this->publishes([
                __DIR__.'/../database/migrations/' => database_path('migrations'),
            ], 'migrations');
        }

    }
}
