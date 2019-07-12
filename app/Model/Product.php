<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function reviews(){
        return $this->hasMany(Review::class);
    }
}
