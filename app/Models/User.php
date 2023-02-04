<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'referrer_id',
        'secret_question',
        'secret_answer',
        'btc_address',
        'usdt_address',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'last_access',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'referral_link',
        'account_balance',
        'earnings',
        'pending_withdrawals',
        'successful_withdrawals',
    ];

    /**
     * Get the user's referral link.
     *
     * @return string
     */
    public function getReferralLinkAttribute()
    {
        return $this->referral_link = route('register', ['ref' => $this->username]);
    }

    /**
     * Get the user's account balance.
     *
     * @return float
     */
    public function getAccountBalanceAttribute()
    {
        $deposits = $this->payments->where('status', 2)->sum->amount;
        $withdrawals = $this->withdrawals->sum->amount;

        return $this->account_balance = (($deposits + $this->earnings) - $withdrawals);
    }

    /**
     * Get the user's earnings.
     *
     * @return float
     */
    public function getEarningsAttribute()
    {
        $userReferralEarnings = 20 * $this->referrals->count();
        $completedPlans = $this->payments->where('status', 2);
        $planEarnings = 0;
        foreach ($completedPlans as $payment) {
            $planEarnings += ($payment->plan->return / 100) * $payment->amount;
        }

        return $this->earnings = $planEarnings + $userReferralEarnings;
    }

    /**
     * Get the user's pending withdrawals.
     *
     * @return float
     */
    public function getPendingWithdrawalsAttribute()
    {
        return $this->pending_withdrawals = $this->withdrawals->where('status', 0);
    }

    /**
     * Get the user's successful withdrawals.
     *
     * @return float
     */
    public function getSuccessfulWithdrawalsAttribute()
    {
        return $this->successful_withdrawals = $this->withdrawals->where('status', 1);
    }

    /**
     * A user has a referrer.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function referrer()
    {
        return $this->belongsTo(User::class, 'referrer_id', 'id');
    }

    /**
     * A user has many referrals.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function referrals()
    {
        return $this->hasMany(User::class, 'referrer_id', 'id');
    }

    /**
     * A user has many payments.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    /**
     * A user has many withdrawals.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function withdrawals()
    {
        return $this->hasMany(Withdrawal::class);
    }
}
