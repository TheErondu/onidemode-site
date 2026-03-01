<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    public function run()
    {
        $now = now();

        $settings = [
            // Global
            ['key' => 'site_name',    'value' => 'ONÍDÈMỌDÈ',                          'group' => 'global'],
            ['key' => 'site_logo',    'value' => 'assets/images/logo/ONIDEMODE.webp',   'group' => 'global'],
            ['key' => 'site_favicon', 'value' => 'assets/images/logo/favicon.ico',      'group' => 'global'],

            // Contact
            ['key' => 'site_contact_address', 'value' => '123 Yoruba Heritage Avenue, Lagos, Nigeria', 'group' => 'contact'],
            ['key' => 'site_contact_phone',   'value' => '+2349048519362',                             'group' => 'contact'],
            ['key' => 'site_contact_email',   'value' => 'info@onidemodegameshow.com',                 'group' => 'contact'],

            // Social
            ['key' => 'facebook_page',               'value' => 'https://www.facebook.com/AwikonkoTv',              'group' => 'social'],
            ['key' => 'twitter_handle',              'value' => 'https://x.com/AwikonkoTv',                         'group' => 'social'],
            ['key' => 'youtube_previous_episodes_link', 'value' => 'https://www.youtube.com/@Authenticyorubatv/videos', 'group' => 'social'],
            ['key' => 'linkedin_profile',            'value' => '#',                                                 'group' => 'social'],

            // Payment
            ['key' => 'participant_registration_fee', 'value' => '1000', 'group' => 'payment'],
            ['key' => 'currency',                     'value' => 'NGN',  'group' => 'payment'],
            ['key' => 'tax_rate',                     'value' => '7.5',  'group' => 'payment'],

            // SEO
            ['key' => 'seo_title',       'value' => 'Yoruba Essence, Culture Reimagined',                                                                                          'group' => 'seo'],
            ['key' => 'seo_description', 'value' => 'ONÍDÈMỌDÈ is a Yoruba cultural game show celebrating language, heritage, traditions and the life of the Yoruba people.', 'group' => 'seo'],
            ['key' => 'seo_keywords',    'value' => 'Yoruba, culture, heritage, game show, Onidemode, language, tradition',                                                       'group' => 'seo'],
            ['key' => 'seo_author',      'value' => 'ONÍDÈMỌDÈ',                                                                                                                  'group' => 'seo'],
            ['key' => 'og_image',        'value' => 'assets/images/logo/og-image.png',                                                                                            'group' => 'seo'],
        ];

        foreach ($settings as $setting) {
            DB::table('settings')->updateOrInsert(
                ['key' => $setting['key']],
                array_merge($setting, ['created_at' => $now, 'updated_at' => $now])
            );
        }
    }
}
