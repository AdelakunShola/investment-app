<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    
 protected $guarded = [];



    public function shares()
{
    return $this->hasMany(AdShare::class);
}



// app/Models/Blog.php

public function user()
{
    return $this->belongsTo(User::class);
}

}
