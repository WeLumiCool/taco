<?php

namespace App\Http\Controllers;

use App\AdvCompany;
use App\Advertiser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;

class AdvCompanyController extends Controller
{
    //

    public function order($id, $type, $case)
    {
        $link = $_SERVER['HTTP_REFERER'];
        $user = Auth::user();
        $advertiser = Advertiser::find($id);
        $case = $advertiser->getCase($case);
//        dd($case);
        return view('client.advCompany.order',['advertiser' => $advertiser, 'type' => $type, 'user' => $user, 'case' => $case, 'link' => $link]);
    }

    public function store(Request $request)
    {
//        dd($request->all());
        $adv = new AdvCompany();
        $adv->name = $request->name;
        $adv->phone = $request->phone;
        $adv->email = $request->email;
        $adv->desc = $request->desc;
        $adv->comment = $request->comment;
        $adv->status = 1;
        $adv->link = $request->link;
        $adv->type_id = $request->type_id;
        $adv->user_id = $request->user_id;
        $adv->advertiser_id = $request->advertiser_id;
        $adv->case_id = $request->case_id;
        $adv->total_price = $request->total_price;
        if (isset($request->file))
        {
            $img = $request->file;
            $fileName = 'advCompany/'.$img->getClientOriginalName();
            $image = ImageManagerStatic::make($img);

            $image = $image->resize(500, null, function ($constraint) {
                return $constraint->aspectRatio();
            })
                ->stream('jpg', 80);

            Storage::disk('local')->put('public/' . $fileName, $image);
            $adv->file = $fileName;
        }
        if ($request->type_id == 7)
        {
            $adv->tarif = $request->tarif;
            $adv->chrono = $request->chrono;
        }
        if ($request->type_id == 8)
        {
            $adv->chrono = $request->chrono;
        }
        $adv->save();

        return redirect($request->url);
    }

    public function show($id)
    {
        $adv = AdvCompany::find($id);

        if (Auth::user()->role_id == 2 && $adv->user_id != Auth::user()->id)
        {
                return redirect()->back();
        }
        elseif (Auth::user()->role_id == 3 && $adv->advertiser_id != Auth::user()->advertiser->id)
        {
            return redirect()->back();
        }

        return view('client.companies.show',['adv' => $adv]);
    }

    public function advActive($id)
    {
        $adv = AdvCompany::find($id);

        $adv->status = 2;
        $adv->save();

        return redirect()->back();
    }
}
