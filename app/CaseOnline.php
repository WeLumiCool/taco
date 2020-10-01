<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaseOnline extends Model
{

    public function advertiser()
    {
        return $this->belongsTo(Advertiser::class)->where('type_id', '=', 9);
    }
}
