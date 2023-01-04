<?php

namespace App\Providers;

use App\Paypal\PaypalToken;
use Illuminate\Support\Facades\Schema;
use App\Paypal\CompanyPaymentExecution;
use App\Paypal\CompanyPaymentMechanism;
use Illuminate\Support\ServiceProvider;
use App\Paypal\ServiceProviderPaymentExecution;
use App\Paypal\ServiceProviderPaymentMechanism;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CompanyPaymentMechanism::class);
        $this->app->bind(CompanyPaymentExecution::class);
        $this->app->bind(ServiceProviderPaymentMechanism::class);
        $this->app->bind(ServiceProviderPaymentExecution::class);
        $this->app->bind(PaypalToken::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(190);

        $mainPath = database_path('migrations');
        $directories = glob($mainPath . '/*' , GLOB_ONLYDIR);
        $paths = array_merge([$mainPath], $directories);

        $this->loadMigrationsFrom($paths);
    }
}
