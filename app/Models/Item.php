<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'payment_options' => 'array',
        'images' => 'array',
        'price' => 'decimal:2',
        'share_count' => 'integer',
    ];

    public function shares()
    {
        return $this->hasMany(ItemUserShare::class);
    }
}
