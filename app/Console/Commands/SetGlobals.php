<?php

namespace App\Console\Commands;

use App\Models\Setting;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

class SetGlobals extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'globals:set';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Set global variables from database';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        if (Schema::hasTable('settings')) {
            $settings = Setting::first();

            $global_variables = [
                'app_name' => $settings->app_name,

                'admin' => [
                    'email' => $settings->admin_email,
                ],

                /*
              |--------------------------------------------------------------------------
              | Social Media Links
              |--------------------------------------------------------------------------
              |
              | This option controls the social media links available across the app
              |
              */
                'socials' => [
                    'facebook' => $settings->facebook,
                    'twitter' => $settings->twitter,
                    'instagram' => $settings->instagram,
                    'whatsapp' => $settings->whatsapp,
                    'email' => $settings->email,
                    'youtube' => $settings->youtube_video,
                ],

                /*
              |--------------------------------------------------------------------------
              | Finance
              |--------------------------------------------------------------------------
              |
              | This option controls the financial settings of the app
              |
              */
                'currency' => $settings->currency,
                'ref_worth' => $settings->referral_worth,
                'withdrawal_charge' => $settings->withdrawal_charge, // In percent
                'min_investment' => $settings->min_investment,
                'min_withdrawal' => $settings->min_withdrawal,

                /*
              |--------------------------------------------------------------------------
              | Search Engine Optimization (SEO)
              |--------------------------------------------------------------------------
              |
              | This option controls the seo settings of the app
              |
              */
                'seo' => [
                    'description' => $settings->description,
                    'keywords' => $settings->keywords,
                ]
            ];

            $fp = fopen(base_path('config/myglobals.php'), 'w');
            fwrite($fp, '<?php return ' . var_export($global_variables, true) . ';');
            fclose($fp);
        } else {
            $this->error('Please run your migrations and seed database first!');

            return Command::FAILURE;
        }

        return Command::SUCCESS;
    }
}
