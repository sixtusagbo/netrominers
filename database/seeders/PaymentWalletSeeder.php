<?php

namespace Database\Seeders;

use App\Models\PaymentWallet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentWalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Btc address
        PaymentWallet::factory()->create();
        // Eth
        PaymentWallet::factory()->create([
            'name' => 'Ethereum',
            'network' => 'ETH'
        ]);
    }
}
