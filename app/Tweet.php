<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    //Relationship

    public function user()
    {
       return $this->belongsTo(User::class);
    }
}
