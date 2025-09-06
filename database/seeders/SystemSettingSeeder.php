<?php

namespace Database\Seeders;

use App\Models\SystemSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SystemSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SystemSetting::create([
            'title' => 'Location Data',
            'system_name' => 'Location Data',
            'email' => 'info@locationdata.com',
            'number' => '0123456789',
            'logo' => '/frontend/logo.png',
            'favicon' => '/frontend/favicon.png',
            'address' => null,
            'copyright_text' => 'Copyright 2025. All Rights Reserved. Powered by Location Data.',
            'description' => null,
            'created_at' => now(),
            'updated_at' => now(),
            'deleted_at' => null,
        ]);
    }
}
