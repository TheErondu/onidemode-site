<?php

namespace App\Providers;

use App\Models\Setting;
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
        try {
            $settings = Setting::pluck('value', 'key')->toArray();

            if (!empty($settings)) {
                Config::set('settings', $settings);
            }
        } catch (\Exception $e) {
            // Settings table may not exist yet (e.g., during initial migration)
        }
    }
}
