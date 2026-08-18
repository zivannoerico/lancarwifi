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
        User::factory()->create([
            'name' => 'Admin LancarWiFi',
            'email' => 'admin@lancarwifi.com',
            'password' => Hash::make('password'),
        ]);

        // Dummy Packages
        Package::create([
            'name' => 'Paket Hemat',
            'speed' => 20,
            'price' => 150000,
            'duration' => 'bulan',
            'features' => 'Unlimited Kuota,Router Gratis,Cocok untuk 1-3 Perangkat',
            'is_active' => true,
        ]);

        Package::create([
            'name' => 'Paket Keluarga',
            'speed' => 50,
            'price' => 250000,
            'duration' => 'bulan',
            'features' => 'Unlimited Kuota,Router Dual Band,Cocok untuk 4-7 Perangkat,Gratis Instalasi',
            'is_active' => true,
        ]);

        // Dummy FAQ
        Faq::create([
            'question' => 'Bagaimana cara berlangganan LancarWiFi?',
            'answer' => 'Anda dapat berlangganan dengan menekan tombol Hubungi Kami dan mengisi form, atau langsung menghubungi WhatsApp Sales kami.',
            'is_active' => true,
        ]);

        // Settings (Contact, About, Colocation)
        Setting::create(['key' => 'contact', 'value' => null]);
        Setting::create(['key' => 'about', 'value' => null]);
        Setting::create(['key' => 'colocation', 'value' => null]);
    }
}
