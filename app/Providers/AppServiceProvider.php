<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        \View::composer('*', function ($view) {
            $view->with('settings',  Setting::first());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() == 'local') {
            // $this->app->register('Laracasts\Generators\GeneratorsServiceProvider'); // you're using Jeffrey way's generators, too, right?
            $this->app->register('Backpack\Generators\GeneratorsServiceProvider');
        }
    }
}
