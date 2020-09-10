<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function advertisers(){
        return $this->hasMany(Advertiser::class);
    }
}
