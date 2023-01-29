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
            'name' => 'Plan 1',
            'return' => 10,
            'mining_period' => 24,
            'min_deposit' => 100,
            'max_deposit' => 1000,
        ]);
        // Plan 2
        Plan::factory()->create([
            'name' => 'Plan 2',
            'return' => 20,
            'mining_period' => 48,
            'min_deposit' => 500,
            'max_deposit' => 5000,
        ]);
        // Plan 3
        Plan::factory()->create([
            'name' => 'Plan 3',
            'return' => 25,
            'mining_period' => 72,
            'min_deposit' => 5000,
            'max_deposit' => 10000,
        ]);
        // Plan 4
        Plan::factory()->create([
            'name' => 'Contract Plan 1',
            'return' => 30,
            'mining_period' => 120,
            'min_deposit' => 10000,
            'max_deposit' => 20000,
        ]);
        // Plan 5
        Plan::factory()->create([
            'name' => 'Contract Plan 2',
            'return' => 40,
            'mining_period' => 240,
            'min_deposit' => 1,
            'max_deposit' => null,
        ]);
    }
}
