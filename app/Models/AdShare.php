<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdShare extends Model
{

     protected $guarded = [];
      public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function luxuryAd()
    {
        return $this->belongsTo(Blog::class);
    }
}
