<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class investment_plan extends Model
{
    protected $guarded = [];

    public function users()
{
    return $this->hasMany(User::class);
}

    
}
