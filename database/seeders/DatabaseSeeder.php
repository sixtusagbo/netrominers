<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Sixtus Agbo',
            'username' => 'sixtusagbo',
            'email' => 'sixtusagbo211@gmail.com',
            'type' => 1,
            'password' => '$2y$10$98Th8ee/8LXXCye.eM6XTObCtiO5qgHsZO2lKgLV2Uye9a3wn8RPG' // devPass9
        ]);

        if (App::environment('local')) {
            \App\Models\User::factory(3)->create();
        }

        $this->call([
            PaymentWalletSeeder::class,
            PlanSeeder::class,
            SettingSeeder::class,
        ]);
    }
}
