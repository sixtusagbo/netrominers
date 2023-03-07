<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Plan 1
        Plan::factory()->create([
            'name' => 'BASIC TRADING',
            'return' => 20,
            'mining_period' => 24,
            'min_deposit' => 50,
            'max_deposit' => 499,
        ]);
        // Plan 2
        Plan::factory()->create([
            'name' => 'PREMIUM TRADING',
            'return' => 40,
            'mining_period' => 48,
            'min_deposit' => 500,
            'max_deposit' => 999,
        ]);
        // Plan 3
        Plan::factory()->create([
            'name' => 'MASTER TRADING',
            'return' => 80,
            'mining_period' => 72,
            'min_deposit' => 1000,
            'max_deposit' => 4999,
        ]);
        // Plan 4
        Plan::factory()->create([
            'name' => 'PROMO TRADING',
            'return' => 100,
            'mining_period' => 48,
            'min_deposit' => 5000,
            'max_deposit' => null,
        ]);
    }
}
