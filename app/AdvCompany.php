<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdvCompany extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function advertiser()
    {
        return $this->belongsTo(Advertiser::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }


    public function getAdvCase()
    {
        if($this->type_id == 2)
        {
            $case = CaseInstagram::find($this->case_id);
        }
        elseif ($this->type_id == 3)
        {
            $case = CaseTikTok::find($this->case_id);
        }
        elseif ($this->type_id == 4)
        {
            $case = CaseYoutube::find($this->case_id);
        }
        elseif ($this->type_id == 5)
        {
            $case = CaseVkontakte::find($this->case_id);
        }
        elseif ($this->type_id == 7)
        {
            $case = CaseRadio::find($this->case_id);
        }
        elseif ($this->type_id == 8)
        {
            $case = CaseTv::find($this->case_id);
        }
        elseif ($this->type_id == 9)
        {
            $case = CaseOnline::find($this->case_id);
        }

        return $case;
    }

}
