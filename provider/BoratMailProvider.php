<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BoratMailProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views/components', 'general');
        $this->publishes([
            __DIR__ . '/../resources/views/components' => resource_path('views/vendor/components/general'),
        ]);
    }
}
