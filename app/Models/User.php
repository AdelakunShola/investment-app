<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $guarded = [];


    public function investmentPlan()
{
    return $this->belongsTo(investment_plan::class);
}


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

   public function referrals()
{
    return $this->hasMany(Referral::class, 'referred_by');
}

// Who referred this user
public function referredBy()
{
    return $this->hasOne(Referral::class, 'user_id');
}



public function ranking()
{
    return $this->belongsTo(UserRanking::class, 'user_ranking_id');
}

public function transactions()
{
    return $this->hasMany(Transaction::class);
}

public function totalProfit()
{
    return $this->transactions()->where('type', 'profit')->sum('amount');
}

public function updateUserRanking()
{
    $profit = $this->totalProfit();

    $eligibleRanking = UserRanking::where('status', 1)
        ->where('minimum_earnings', '<=', $profit)
        ->orderByDesc('minimum_earnings')
        ->first();

    if ($eligibleRanking && $this->user_ranking_id !== $eligibleRanking->id) {
        $this->user_ranking_id = $eligibleRanking->id;
        $this->save();
    }
}



public function adShares()
{
    return $this->hasMany(AdShare::class);
}




}
