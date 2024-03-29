<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setting>
 */
class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'app_name' => 'Netrominers',
            'description' => 'We are Netrominers, a VN based company involved with trading in cryptocurrencies.',
            'keywords' => 'netro, netromine, netrominers, crypto mining',
            'email' => 'support@netrominers.com',
            'admin_email' => null,
            'currency' => '$',
            'referral_worth' => '10%',
            'withdrawal_charge' => 0,
            'min_investment' => 100,
            'min_withdrawal' => 20,
        ];
    }
}
