<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Package;
use App\Models\Faq;
use App\Models\Setting;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Admin User
        User::firstOrCreate(
            ['email' => 'admin@lancarwifi.com'],
            [
                'name' => 'Admin LancarWiFi',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        );



        // Dummy FAQ
        Faq::firstOrCreate(
            ['question' => 'Bagaimana cara berlangganan LancarWiFi?'],
            [
                'answer' => 'Anda dapat berlangganan dengan menekan tombol Hubungi Kami dan mengisi form, atau langsung menghubungi WhatsApp Sales kami.',
                'is_active' => true,
            ]
        );

        // Settings (Contact, About, Colocation)
        Setting::firstOrCreate(['key' => 'contact'], ['value' => null]);
        Setting::firstOrCreate(['key' => 'about'], ['value' => null]);
        Setting::firstOrCreate(['key' => 'colocation'], ['value' => null]);
    }
}
