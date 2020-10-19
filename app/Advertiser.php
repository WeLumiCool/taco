<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertiser extends Model
{
    protected $casts = [
        'fields' => 'collection',
    ];

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

    public function radiocases()
    {
        return $this->hasMany(CaseRadio::class);
    }

    public function tiktokcases()
    {
        return $this->hasMany(CaseTikTok::class);
    }

    public function vkontaktecases()
    {
        return $this->hasMany(CaseVkontakte::class);
    }

    public function instagramcases()
    {
        return $this->hasMany(CaseInstagram::class);
    }

    public function youtubecases()
    {
        return $this->hasMany(CaseYoutube::class);
    }

    public function onlinecases()
    {
        return $this->hasMany(CaseOnline::class);
    }

    public function tvcases()
    {
        return $this->hasMany(CaseTv::class);
    }

    public function advcompanies()
    {
        return $this->hasMany(AdvCompany::class);
    }

    public function getCase($id)
    {
        if ($this->type_id == 2)
        {
            $case = CaseInstagram::find($id);

            return $case;
        }
        elseif($this->type_id == 3)
        {
            $case = CaseTikTok::find($id);

            return $case;
        }
        elseif ($this->type_id == 4)
        {
            $case = CaseYoutube::find($id);

            return $case;
        }
        elseif ($this->type_id == 5)
        {
            $case = CaseVkontakte::find($id);

            return $case;
        }
        elseif ($this->type_id == 7)
        {
            $case = CaseRadio::find($id);

            return $case;
        }
        elseif ($this->type_id == 8)
        {
            $case = CaseTv::find($id);

            return $case;
        }
        elseif ($this->type_id == 9)
        {
            $case = CaseOnline::find($id);

            return $case;
        }


        return null;
    }

    public function getCases()
    {
        if ($this->type_id == 2)
        {
            $cases = CaseInstagram::where('advertiser_id', $this->id)->get();

            return $cases;
        }
        elseif ($this->type_id == 3)
        {
            $cases = CaseTikTok::where('advertiser_id', $this->id)->get();

            return $cases;
        }
        elseif ($this->type_id == 4)
        {
            $cases = CaseYoutube::where('advertiser_id', $this->id)->get();

            return $cases;
        }
        elseif ($this->type_id == 5)
        {
            $cases = CaseVkontakte::where('advertiser_id', $this->id)->get();

            return $cases;
        }
        elseif ($this->type_id == 7)
        {
            $cases = CaseRadio::where('advertiser_id', $this->id)->get();

            return $cases;
        }
        elseif ($this->type_id == 8)
        {
            $cases = CaseTv::where('advertiser_id', $this->id)->get();

            return $cases;
        }
        elseif ($this->type_id == 9)
        {
            $cases = CaseOnline::where('advertiser_id', $this->id)->get();

            return $cases;
        }

        return null;
    }
}
