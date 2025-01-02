<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = now();
        DB::table('settings')->insert([
            // Global Settings
            ['key' => 'site_name', 'value' => 'My Awesome Site', 'group' => 'global', 'created_at' => $now, 'updated_at' => $now],
            ['key' => 'site_logo', 'value' => '/images/logo.png', 'group' => 'global', 'created_at' => $now, 'updated_at' => $now],
            ['key' => 'site_favicon', 'value' => '/images/logo/favicon.ico', 'group' => 'global', 'created_at' => $now, 'updated_at' => $now],

            // Payment Settings
            ['key' => 'participant_registration_fee', 'value' => '1000', 'group' => 'payment', 'created_at' => now(), 'updated_at' => now()],
            ['key' => 'currency', 'value' => 'NGN', 'group' => 'payment', 'created_at' => now(), 'updated_at' => now()],
            ['key' => 'tax_rate', 'value' => '7.5', 'group' => 'payment', 'created_at' => now(), 'updated_at' => now()],

            // SEO Settings
            ['key' => 'seo_title', 'value' => 'Welcome to My Site', 'group' => 'seo', 'created_at' => $now, 'updated_at' => $now],
            ['key' => 'seo_description', 'value' => 'Default description for the website.', 'group' => 'seo', 'created_at' => $now, 'updated_at' => $now],
            ['key' => 'seo_keywords', 'value' => 'keyword1, keyword2, keyword3', 'group' => 'seo', 'created_at' => $now, 'updated_at' => $now],
            ['key' => 'seo_author', 'value' => 'Your Site Name', 'group' => 'seo', 'created_at' => $now, 'updated_at' => $now],

            // Social Media and OG Settings
            ['key' => 'og_image', 'value' => '/images/logo/og-image.png', 'group' => 'seo', 'created_at' => $now, 'updated_at' => $now],
            ['key' => 'twitter_handle', 'value' => '@YourTwitterHandle', 'group' => 'seo', 'created_at' => $now, 'updated_at' => $now],
            ['key' => 'facebook_page', 'value' => 'https://www.facebook.com/YourPage', 'group' => 'seo', 'created_at' => $now, 'updated_at' => $now],
            ['key' => 'linkedin_profile', 'value' => 'https://www.linkedin.com/in/YourProfile', 'group' => 'seo', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
