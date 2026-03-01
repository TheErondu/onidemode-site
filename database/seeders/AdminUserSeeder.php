<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@onidemodegameshow.com'],
            [
                'name'              => 'Admin',
                'password'          => Hash::make('On!d3m0de@Admin#2026'),
                'is_admin'          => true,
                'email_verified_at' => now(),
            ]
        );
    }
}
