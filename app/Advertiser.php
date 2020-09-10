<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertiser extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
