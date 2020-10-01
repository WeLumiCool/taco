<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function advertisers(){
        return $this->hasMany(Advertiser::class);
    }

    public function types()
    {
        return $this->hasMany(Type::class);
    }
}
