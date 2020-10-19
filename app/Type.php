<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function advertisers(){
        return $this->hasMany(Advertiser::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function radioCases() {
        return $this->hasMany(CaseRadio::class);
    }

    public function advcompanies()
    {
        return $this->hasMany(AdvCompany::class);
    }

    public function fieldtypes()
    {
        return $this->belongsToMany(FieldType::class);
    }
}
