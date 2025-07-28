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


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function plan()
    {
        return $this->belongsTo(investment_plan::class, 'investment_plan_id');
    }


    
}
