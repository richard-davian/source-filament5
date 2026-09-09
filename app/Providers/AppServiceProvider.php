<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (!app()->environment('local')) {
            URL::forceScheme('https');
        }

        \App\Models\User::observe(\App\Observers\UserObserver::class);
        \App\Models\AppSetting::observe(\App\Observers\AppSettingObserver::class);
        \App\Models\Banner::observe(\App\Observers\BannerObserver::class);
    }
}
