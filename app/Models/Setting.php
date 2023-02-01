<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'app_name',
        'description',
        'keywords',
        'email',
        'admin_email',
        'facebook',
        'twitter',
        'instagram',
        'whatsapp',
        'youtube_video',
        'currency',
        'referral_worth',
        'withdrawal_charge',
        'min_investment',
        'min_withdrawal',
    ];
}
