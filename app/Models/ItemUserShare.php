<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemUserShare extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'shared_at' => 'datetime',
        'is_verified' => 'boolean',
        'reward_amount' => 'decimal:2',
    ];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
