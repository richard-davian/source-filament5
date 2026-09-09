<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AppSetting;
use Illuminate\Support\Str;

class AppSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AppSetting::query()->firstOrCreate(
            ['id' => 1],
            [
                'app_name' => 'My Application',
                'tagline' => null,
                'description' => null,
                'logo_url' => null,
                'favicon_url' => null,

                'domain' => null,
                'email' => null,
                'phone' => null,
                'whatsapp_number' => null,
                'address' => null,
                'map_url' => null,
                'map_embed_code' => null,

                'copyright_text' => '© ' . date('Y') . ' My Application. All rights reserved.',
                'privacy_url' => '/privacy-policy',
                'terms_url' => '/terms',

                'timezone' => 'Asia/Jakarta',
                'locale' => 'id',
                'currency' => 'IDR',

                'maintenance_mode' => false,
                'maintenance_message' => null,
            ]
        );
    }
}
