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
           'copyright' => 'Copyright 2023, Bangladesh Safe Internet Forum',
        ]);
    }
}
