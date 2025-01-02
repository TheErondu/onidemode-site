<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

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
    public function boot()
    {
        if (config('app.env') === 'production') {
            URL::forceScheme('https');
        }
        $settings = Setting::pluck('value', 'key')->toArray();

        if (!empty($settings)) {
            Config::set('settings', $settings);
            Artisan::call('config:clear'); // Clear the config cache to apply changes
        }
    }
}
