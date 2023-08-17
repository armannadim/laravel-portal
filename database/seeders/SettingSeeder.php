<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::factory()->create([
           'site_name' => 'BSIF Portal',
           'copyright' => 'Copyright © 2023. All rights reserved.',
            'about_site' => 'Lorem Ipsum is simply dummy text of the printing a...',
            'address' => 'Somewhere on the earth',
            'phone' => '0310354345',
            'email' => 'myemail@email.com',
            'facebook' => 'https://facebook.com',
            'twitter' => 'https://twitter.com',
            'instagram' => 'https://instagram.com',
            'linkedin' => 'https://linkedin.com',
            'youtube' => 'https://youtube.com',
            'logo' => 'storage/setting/1692215307.png'
        ]);
    }
}
